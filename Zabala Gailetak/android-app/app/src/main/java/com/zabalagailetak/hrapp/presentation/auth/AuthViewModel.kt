package com.zabalagailetak.hrapp.presentation.auth

import androidx.lifecycle.ViewModel
import androidx.lifecycle.viewModelScope
import com.zabalagailetak.hrapp.data.api.AuthApiService
import com.zabalagailetak.hrapp.domain.model.LoginRequest
import dagger.hilt.android.lifecycle.HiltViewModel
import kotlinx.coroutines.flow.MutableStateFlow
import kotlinx.coroutines.flow.StateFlow
import kotlinx.coroutines.flow.asStateFlow
import kotlinx.coroutines.flow.update
import kotlinx.coroutines.launch
import javax.inject.Inject

/**
 * ViewModel for authentication screens
 */
@HiltViewModel
class AuthViewModel @Inject constructor(
    private val authApi: AuthApiService,
    private val tokenStore: com.zabalagailetak.hrapp.data.auth.TokenStore
) : ViewModel() {

    private val _uiState = MutableStateFlow(AuthUiState())
    val uiState: StateFlow<AuthUiState> = _uiState.asStateFlow()

    /**
     * Login with username and password
     */
    fun login(username: String, password: String) {
        viewModelScope.launch {
            _uiState.update { it.copy(isLoading = true, error = null) }
            
            try {
                val response = authApi.login(LoginRequest(username, password))
                
                if (!response.isSuccessful) {
                    val errorMsg = response.errorBody()?.string() ?: "Errorea login egitean"
                    _uiState.update {
                        it.copy(
                            isLoading = false,
                            error = errorMsg
                        )
                    }
                    return@launch
                }
                
                val loginResponse = response.body()!!
                
                if (loginResponse.mfaRequired) {
                    _uiState.update {
                        it.copy(
                            isLoading = false,
                            mfaRequired = true,
                            mfaToken = loginResponse.mfaToken,
                            error = null
                        )
                    }
                } else {
                    // Save token to secure store
                    val token = loginResponse.token
                    if (!token.isNullOrBlank()) {
                        try {
                            tokenStore.saveToken(token)
                            // Persist refresh token if provided by API
                            loginResponse.refreshToken?.let { rf ->
                                if (rf.isNotBlank()) tokenStore.saveRefreshToken(rf)
                            }
                        } catch (_: Exception) {
                            // ignore store errors for now
                        }
                    }

                    _uiState.update {
                        it.copy(
                            isLoading = false,
                            loginSuccess = true,
                            token = token,
                            error = null
                        )
                    }
                }
            } catch (e: Exception) {
                _uiState.update {
                    it.copy(
                        isLoading = false,
                        error = e.message ?: "Errorea konexioan"
                    )
                }
            }
        }
    }

    /**
     * Verify MFA code
     */
    fun verifyMfa(code: String) {
        viewModelScope.launch {
            _uiState.update { it.copy(isLoading = true, error = null) }
            
            try {
                val mfaToken = _uiState.value.mfaToken ?: throw Exception("No MFA token")
                
                // TODO: Implement MFA verification API call
                
                _uiState.update {
                    it.copy(
                        isLoading = false,
                        loginSuccess = true,
                        error = null
                    )
                }
            } catch (e: Exception) {
                _uiState.update {
                    it.copy(
                        isLoading = false,
                        error = e.message ?: "Errorea MFA egiaztatzean"
                    )
                }
            }
        }
    }

    /**
     * Clear error
     */
    fun clearError() {
        _uiState.update { it.copy(error = null) }
    }

    /**
     * Reset login state
     */
    fun resetLoginState() {
        _uiState.update {
            it.copy(
                loginSuccess = false,
                mfaRequired = false,
                mfaToken = null
            )
        }
    }
}

/**
 * UI State for authentication screens
 */
data class AuthUiState(
    val isLoading: Boolean = false,
    val loginSuccess: Boolean = false,
    val mfaRequired: Boolean = false,
    val mfaToken: String? = null,
    val token: String? = null,
    val error: String? = null
)

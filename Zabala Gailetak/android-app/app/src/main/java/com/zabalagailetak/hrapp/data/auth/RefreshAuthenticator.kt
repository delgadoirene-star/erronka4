package com.zabalagailetak.hrapp.data.auth

import com.zabalagailetak.hrapp.data.api.AuthApiService
import kotlinx.coroutines.runBlocking
import okhttp3.Authenticator
import okhttp3.Request
import okhttp3.Response
import okhttp3.Route
import javax.inject.Inject

/**
 * OkHttp Authenticator that attempts to use the refresh token to obtain a new access token.
 * This implementation is conservative: it performs a synchronous refresh call and updates TokenStore.
 */
class RefreshAuthenticator @Inject constructor(
    private val authApi: AuthApiService,
    private val tokenStore: TokenStore
) : Authenticator {

    override fun authenticate(route: Route?, response: Response): Request? {
        // Avoid infinite loops
        if (response.request.header("Authorization") == null) return null

        // Get refresh token
        val refresh = tokenStore.getRefreshTokenBlocking() ?: return null

        return try {
            // Call refresh endpoint synchronously via runBlocking
            val refreshResponse = runBlocking {
                val body = mapOf("refresh_token" to refresh)
                authApi.refresh(body)
            }

            if (!refreshResponse.isSuccessful) return null

            val newTokens = refreshResponse.body() ?: return null
            val newAccess = newTokens.token
            val newRefresh = newTokens.refreshToken

            // Persist tokens
            runBlocking {
                tokenStore.saveToken(newAccess)
                if (!newRefresh.isNullOrBlank()) tokenStore.saveRefreshToken(newRefresh)
            }

            // Build a new request with updated Authorization header
            response.request.newBuilder()
                .header("Authorization", "Bearer $newAccess")
                .build()
        } catch (e: Exception) {
            null
        }
    }
}

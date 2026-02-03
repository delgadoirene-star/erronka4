package com.zabalagailetak.hrapp.data.auth

import android.content.Context
import android.util.Base64
import androidx.datastore.core.DataStore
import androidx.datastore.preferences.core.Preferences
import androidx.datastore.preferences.core.edit
import androidx.datastore.preferences.core.stringPreferencesKey
import androidx.datastore.preferences.preferencesDataStore
import kotlinx.coroutines.Dispatchers
import kotlinx.coroutines.flow.first
import kotlinx.coroutines.withContext
import kotlinx.coroutines.runBlocking
import javax.inject.Inject
import javax.inject.Singleton

private val Context.dataStore: DataStore<Preferences> by preferencesDataStore(name = "secure_prefs")

@Singleton
class TokenStore @Inject constructor(private val context: Context) {
    private val KEY_TOKEN_DATA = stringPreferencesKey("key_token_data")
    private val KEY_TOKEN_IV = stringPreferencesKey("key_token_iv")
    private val KEY_REFRESH_DATA = stringPreferencesKey("key_refresh_data")
    private val KEY_REFRESH_IV = stringPreferencesKey("key_refresh_iv")

    suspend fun saveToken(token: String) {
        val (encrypted, iv) = KeystoreHelper.encrypt(token.toByteArray())
        withContext(Dispatchers.IO) {
            context.dataStore.edit { prefs ->
                prefs[KEY_TOKEN_DATA] = Base64.encodeToString(encrypted, Base64.NO_WRAP)
                prefs[KEY_TOKEN_IV] = Base64.encodeToString(iv, Base64.NO_WRAP)
            }
        }
    }

    suspend fun saveRefreshToken(refresh: String) {
        val (encrypted, iv) = KeystoreHelper.encrypt(refresh.toByteArray())
        withContext(Dispatchers.IO) {
            context.dataStore.edit { prefs ->
                prefs[KEY_REFRESH_DATA] = Base64.encodeToString(encrypted, Base64.NO_WRAP)
                prefs[KEY_REFRESH_IV] = Base64.encodeToString(iv, Base64.NO_WRAP)
            }
        }
    }

    suspend fun clearToken() {
        withContext(Dispatchers.IO) {
            context.dataStore.edit { prefs ->
                prefs.remove(KEY_TOKEN_DATA)
                prefs.remove(KEY_TOKEN_IV)
                prefs.remove(KEY_REFRESH_DATA)
                prefs.remove(KEY_REFRESH_IV)
            }
        }
    }

    suspend fun getToken(): String? {
        val prefs = context.dataStore.data.first()
        val encryptedStr = prefs[KEY_TOKEN_DATA] ?: return null
        val ivStr = prefs[KEY_TOKEN_IV] ?: return null
        val encrypted = Base64.decode(encryptedStr, Base64.NO_WRAP)
        val iv = Base64.decode(ivStr, Base64.NO_WRAP)
        return String(KeystoreHelper.decrypt(encrypted, iv))
    }

    suspend fun getRefreshToken(): String? {
        val prefs = context.dataStore.data.first()
        val encryptedStr = prefs[KEY_REFRESH_DATA] ?: return null
        val ivStr = prefs[KEY_REFRESH_IV] ?: return null
        val encrypted = Base64.decode(encryptedStr, Base64.NO_WRAP)
        val iv = Base64.decode(ivStr, Base64.NO_WRAP)
        return String(KeystoreHelper.decrypt(encrypted, iv))
    }

    // Blocking helpers for network layer (wrap suspend calls)
    fun getTokenBlocking(): String? = runBlocking { getToken() }
    fun getRefreshTokenBlocking(): String? = runBlocking { getRefreshToken() }
}

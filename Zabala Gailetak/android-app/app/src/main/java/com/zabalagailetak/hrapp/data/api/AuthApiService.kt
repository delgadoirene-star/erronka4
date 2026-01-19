package com.zabalagailetak.hrapp.data.api

import com.zabalagailetak.hrapp.domain.model.*
import retrofit2.Response
import retrofit2.http.*

/**
 * Auth API Service
 */
interface AuthApiService {
    
    @POST("auth/login")
    suspend fun login(@Body request: LoginRequest): Response<LoginResponse>
    
    @POST("auth/mfa/verify")
    suspend fun verifyMfa(@Body request: MfaVerificationRequest): Response<LoginResponse>
    
    @POST("auth/logout")
    suspend fun logout(): Response<Unit>
    
    @GET("auth/me")
    suspend fun getCurrentUser(): Response<Employee>
}

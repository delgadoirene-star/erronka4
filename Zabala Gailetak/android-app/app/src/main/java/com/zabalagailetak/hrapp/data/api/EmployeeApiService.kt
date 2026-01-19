package com.zabalagailetak.hrapp.data.api

import com.zabalagailetak.hrapp.domain.model.*
import retrofit2.Response
import retrofit2.http.*

/**
 * Employee API Service
 */
interface EmployeeApiService {
    
    @GET("employees/me")
    suspend fun getMyProfile(): Response<Employee>
    
    @PUT("employees/me")
    suspend fun updateMyProfile(@Body employee: Employee): Response<Employee>
    
    @GET("employees")
    suspend fun getAllEmployees(): Response<List<Employee>>
}

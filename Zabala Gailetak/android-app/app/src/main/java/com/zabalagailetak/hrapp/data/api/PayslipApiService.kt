package com.zabalagailetak.hrapp.data.api

import com.zabalagailetak.hrapp.domain.model.*
import retrofit2.Response
import retrofit2.http.*

/**
 * Payslip API Service
 */
interface PayslipApiService {
    
    @GET("payslips/my")
    suspend fun getMyPayslips(): Response<PayslipsResponse>
    
    @GET("payslips/{id}")
    suspend fun getPayslipById(@Path("id") id: Int): Response<Payslip>
    
    @GET("payslips/{id}/download")
    suspend fun downloadPayslip(@Path("id") id: Int): Response<ByteArray>
}

package com.zabalagailetak.hrapp.data.api

import com.zabalagailetak.hrapp.domain.model.*
import retrofit2.Response
import retrofit2.http.*

/**
 * Document API Service
 */
interface DocumentApiService {
    
    @GET("documents/my")
    suspend fun getMyDocuments(): Response<DocumentsResponse>
    
    @GET("documents/public")
    suspend fun getPublicDocuments(): Response<DocumentsResponse>
    
    @GET("documents/{id}")
    suspend fun getDocumentById(@Path("id") id: Int): Response<Document>
    
    @GET("documents/{id}/download")
    suspend fun downloadDocument(@Path("id") id: Int): Response<ByteArray>
}

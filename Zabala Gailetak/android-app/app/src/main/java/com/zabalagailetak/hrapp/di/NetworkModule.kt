package com.zabalagailetak.hrapp.di

import android.content.Context
import com.zabalagailetak.hrapp.BuildConfig
import com.zabalagailetak.hrapp.data.api.*
import com.zabalagailetak.hrapp.data.auth.AuthInterceptor
import com.zabalagailetak.hrapp.data.auth.TokenStore
import dagger.hilt.android.qualifiers.ApplicationContext
import dagger.Module
import dagger.Provides
import dagger.hilt.InstallIn
import dagger.hilt.components.SingletonComponent
import okhttp3.OkHttpClient
import okhttp3.logging.HttpLoggingInterceptor
import retrofit2.Retrofit
import retrofit2.converter.gson.GsonConverterFactory
import javax.inject.Singleton

@Module
@InstallIn(SingletonComponent::class)
object NetworkModule {

    @Provides
    @Singleton
    fun provideLoggingInterceptor(): HttpLoggingInterceptor {
        return HttpLoggingInterceptor().apply {
            level = HttpLoggingInterceptor.Level.BODY
        }
    }

    @Provides
    @Singleton
    fun provideTokenStore(@ApplicationContext context: Context): TokenStore = TokenStore(context)

    @Provides
    @Singleton
    fun provideAuthInterceptor(tokenStore: TokenStore): AuthInterceptor = AuthInterceptor(tokenStore)

    // OkHttp client used for auth calls (refresh) - has no Authenticator and no AuthInterceptor to avoid recursion
    @Provides
    @Singleton
    fun provideAuthOkHttpClient(loggingInterceptor: HttpLoggingInterceptor): OkHttpClient {
        return OkHttpClient.Builder()
            .addInterceptor(loggingInterceptor)
            .build()
    }

    @Provides
    @Singleton
    fun provideAuthRetrofit(okHttpClient: OkHttpClient): Retrofit {
        return Retrofit.Builder()
            .baseUrl(BuildConfig.API_BASE_URL)
            .client(okHttpClient)
            .addConverterFactory(GsonConverterFactory.create())
            .build()
    }

    // Authenticator will be provided after AuthApiService is available
    @Provides
    @Singleton
    fun provideRefreshAuthenticator(authApi: AuthApiService, tokenStore: TokenStore): com.zabalagailetak.hrapp.data.auth.RefreshAuthenticator {
        return com.zabalagailetak.hrapp.data.auth.RefreshAuthenticator(authApi, tokenStore)
    }

    @Provides
    @Singleton
    fun provideOkHttpClient(loggingInterceptor: HttpLoggingInterceptor, authInterceptor: AuthInterceptor, refreshAuthenticator: com.zabalagailetak.hrapp.data.auth.RefreshAuthenticator): OkHttpClient {
        return OkHttpClient.Builder()
            .authenticator(refreshAuthenticator)
            .addInterceptor(authInterceptor)
            .addInterceptor(loggingInterceptor)
            .build()
    }

    @Provides
    @Singleton
    fun provideRetrofit(okHttpClient: OkHttpClient): Retrofit {
        return Retrofit.Builder()
            .baseUrl(BuildConfig.API_BASE_URL)
            .client(okHttpClient)
            .addConverterFactory(GsonConverterFactory.create())
            .build()
    }

    @Provides
    @Singleton
    fun provideVacationApiService(retrofit: Retrofit): VacationApiService {
        return retrofit.create(VacationApiService::class.java)
    }

    @Provides
    @Singleton
    fun provideAuthApiService(retrofit: Retrofit): AuthApiService {
        return retrofit.create(AuthApiService::class.java)
    }

    @Provides
    @Singleton
    fun provideEmployeeApiService(retrofit: Retrofit): EmployeeApiService {
        return retrofit.create(EmployeeApiService::class.java)
    }

    @Provides
    @Singleton
    fun providePayslipApiService(retrofit: Retrofit): PayslipApiService {
        return retrofit.create(PayslipApiService::class.java)
    }

    @Provides
    @Singleton
    fun provideDocumentApiService(retrofit: Retrofit): DocumentApiService {
        return retrofit.create(DocumentApiService::class.java)
    }
}

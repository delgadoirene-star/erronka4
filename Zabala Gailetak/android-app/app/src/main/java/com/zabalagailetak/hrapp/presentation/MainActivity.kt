package com.zabalagailetak.hrapp.presentation

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.activity.enableEdgeToEdge
import androidx.compose.foundation.layout.fillMaxSize
import androidx.compose.material3.MaterialTheme
import androidx.compose.material3.Surface
import androidx.compose.ui.Modifier
import com.zabalagailetak.hrapp.presentation.navigation.AppNavigation
import com.zabalagailetak.hrapp.presentation.ui.theme.ZabalaGaileTakHRTheme
import dagger.hilt.android.AndroidEntryPoint

/**
 * Main Activity for Zabala Gailetak HR App
 * Entry point for the Android application
 */
@AndroidEntryPoint
class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        
        setContent {
            ZabalaGaileTakHRTheme {
                Surface(
                    modifier = Modifier.fillMaxSize(),
                    color = MaterialTheme.colorScheme.background
                ) {
                    // Main navigation host
                    AppNavigation()
                }
            }
        }
    }
}


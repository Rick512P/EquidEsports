package com.example.android

import android.annotation.SuppressLint
import android.os.Build
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.webkit.WebViewClient
import androidx.annotation.RequiresApi

class MainActivity : AppCompatActivity() {
    @RequiresApi(Build.VERSION_CODES.O)
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

        webViewSetup()
    }

    @RequiresApi(Build.VERSION_CODES.O)
    @SuppressLint("Set JavaScriptEnabled")
    private fun webViewSetup() {
        wb_webView.webViewClient = WebViewClient()

        wb_webView.apply {
            loadUrl(url: "http://localhost/EquidEsports/Artigos/")
            settings.javaScriptEnabled = true
            settings.safeBrowsingEnable = true
        }
    }
}
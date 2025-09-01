<?php

return [

    'paths' => ['api/*', 'login', 'logout'],

    'allowed_methods' => ['*'],

    'allowed_origins' => [
    'http://localhost:8000',
    'http://127.0.0.1:8000',
    'http://localhost:5173',   // kalau pakai Vite/Vue
    'http://127.0.0.1:5173',
   ],


    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 3600,

    'supports_credentials' => false, // JWT pakai Authorization header
];

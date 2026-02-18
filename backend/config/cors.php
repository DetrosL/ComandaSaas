<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'],
    'allowed_methods' => ['*'],

    // Coloque as origens do front aqui depois (React geralmente 5173 ou 3000)
    // Você pode deixar '*' temporariamente enquanto está em dev:
    // 'allowed_origins' => ['*'],
    'allowed_origins' => array_filter(explode(',', env('CORS_ALLOWED_ORIGINS', 'http://localhost:5173,http://localhost:3000'))),

    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,

    // Como você vai usar Bearer token (Sanctum tokens), deixa false
    'supports_credentials' => false,
];

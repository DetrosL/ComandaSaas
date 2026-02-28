<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\TenantController;
use App\Http\Controllers\Api\TableController;
use App\Http\Controllers\Api\ProductController;

Route::post('/auth/login', [AuthController::class, 'login']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/auth/logout', [AuthController::class, 'logout']);
    Route::get('/me', [AuthController::class, 'me']);

    // listar tenants que o usuário tem acesso // testes
    Route::get('/tenants', [TenantController::class, 'index']);

    // Tudo q exige tenant selecionado
    Route::middleware(['tenant'])->group(function () {
        Route::get('/tenant', [TenantController::class, 'current']); // retorna o tenant resolvido

        Route::apiResource('/tables', TableController::class);
        Route::apiResource('/products', ProductController::class);
    });
});
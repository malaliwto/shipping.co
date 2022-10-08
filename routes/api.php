<?php

use App\Http\Controllers\OrdersApiController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::get('/orders', [OrdersApiController::class, 'index']);
Route::get('/orders/{id}', [OrdersApiController::class, 'show']);
Route::post('/orders', [OrdersApiController::class, 'store']);
Route::put('/orders/{order}', [OrdersApiController::class, 'update']);
Route::delete('/orders/{order}', [OrdersApiController::class, 'destroy']);
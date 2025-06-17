<?php

use App\Http\Controllers\FurniturController;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

RateLimiter::for('api', function () {
    return Limit::perMinute(180);
});
Route::post('/auth/login', [App\Http\Controllers\Api\Auth\ApiLoginController::class, 'store']);

Route::apiResource("furnitur", App\Http\Controllers\Api\FurniturController::class);

Route::get('/ayam', function (Request $request) {
    return response()->json([
        'message' => 'ayam',

    ]);
});


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

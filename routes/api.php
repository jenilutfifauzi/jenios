<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Register
Route::post('/v1/register', [AuthController::class, 'register'])->name('api.register.v2');

// Login
Route::post('/v1/login', [AuthController::class, 'login'])->name('api.login.v2');


Route::middleware('auth:sanctum')->group(function () {
    // Logout
    Route::post('/v1/logout', [AuthController::class, 'logout'])->name('api.logout.v2');
    // User
    Route::get('/v1/users', [AuthController::class, 'user'])->name('api.user.v2');
});
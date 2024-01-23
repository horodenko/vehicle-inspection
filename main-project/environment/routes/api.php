<?php

use App\Http\Controllers\DriverController;
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

Route::get('/drivers', [DriverController::class, 'index']);
Route::get('/drivers/{id}', [DriverController::class, 'show']);
Route::post('/drivers', [DriverController::class, 'store']);
Route::put('/drivers/{id}', [DriverController::class, 'update']);
Route::delete('/drivers/{id}', [DriverController::class, 'destroy']);

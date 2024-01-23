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
Route::get('/drivers/{driver}', [DriverController::class, 'show']);
Route::post('/drivers', [DriverController::class, 'store']);
Route::put('/drivers/{driver}', [DriverController::class, 'update']);
Route::delete('/drivers/{driver}', [DriverController::class, 'destroy']);

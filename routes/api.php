<?php

use App\Http\Controllers\API\DestinasiWisataController;
use App\Http\Controllers\API\KontakController;
use App\Http\Controllers\API\PaketWisataController;
use App\Http\Controllers\API\ReservationController;
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

Route::get('paket', [DestinasiWisataController::class, 'all']);
Route::get('destinasi', [PaketWisataController::class, 'all']);
Route::get('reservasi', [ReservationController::class, 'all']);
Route::get('kontak', [KontakController::class, 'all']);

Route::post('reservasi', [ReservationController::class, 'store']);
Route::post('kontak', [KontakController::class, 'store']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrCodeGeneratorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post('/Qrcode', [QrCodeGeneratorController::class, 'createQrCode'])->name('Qrcode');
Route::get('/', [QrCodeGeneratorController::class, 'index'])->name('index');

<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\QrcodeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
});

Route::get('/qurcode-create',[QrcodeController::class,'QrCreate'])->name('qrcode.create');

Route::get('/qurcode-check/{last_unique_key}', [QrcodeController::class, 'QrCreateCheck'])->name('qrcode.check');



<?php

use App\Http\Controllers\QrcodeController;
use Illuminate\Support\Facades\Route;
use SimpleSoftwareIO\QrCode\Facades\QrCode as qrcode;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    dd('dfd');
    // return view('welcome');
});
// Route::get('/qrcode', [QrcodeController::class, 'QrImplement'])->name('qrcode.implement');
// Route::get('qrcode', function () {

//     return qrcode::size(300)->generate('A basic example of QR code!');
// });

<?php

use App\Http\Controllers\Payment\PaymobController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


// paymob
Route::post('/credit', [PaymobController::class, 'credit'])->name('credit');
Route::get('/callback', [PaymobController::class, 'callback'])->name('callback');

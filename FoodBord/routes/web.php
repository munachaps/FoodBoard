<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewsController;

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
})->name('index');

Route::get('/online-menu',[ViewsController::class,'index'])->name('online-menu');
Route::get('/cash-online-menu',[ViewsController::class,'cashPayments'])->name('cash-online-menu');
Route::get('/pay-online-menu',[ViewsController::class,'onlinePayments'])->name('pay-online-menu');


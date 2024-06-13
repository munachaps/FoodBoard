<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\NaiveBayesController;

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
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/handlelogin', [LoginController::class, 'handlelogin'])->name('handle_login');
Route::get('/loginerror', [LoginController::class, 'loginError'])->name('error');
Route::get('/online-menu', [ViewsController::class, 'index'])->name('online-menu');
Route::get('/cash-online-menu', [ViewsController::class, 'cashPayments'])->name('cash-online-menu');
Route::get('/pay-online-menu', [ViewsController::class, 'onlinePayments'])->name('pay-online-menu');
Route::get('home', [WelcomeController::class, 'home'])->name('home');
Route::get('addreview', [WelcomeController::class, 'addreview'])->name('addreview');
Route::get('contact', [WelcomeController::class, 'contact'])->name('contact');
Route::get('reviews', [ReviewsController::class, 'reviews'])->name('reviews');

//Creat review as client
Route::post('handlecomment', [ReviewsController::class, 'store'])->name('handle_comment');
Route::get('review-success', [ReviewsController::class, 'reviewSuccess'])->name('review-success');

//Create orders as client
Route::post('/post_order', [OrdersController::class, 'store'])->name('post_order');
Route::post('cash-order', [OrdersController::class, 'storeCashOrder'])->name('cash-order');
Route::get('order-success', [OrdersController::class, 'orderSuccess'])->name('order-success');
Route::post('/classify', [NaiveBayesController::class, 'classify'])->name('classify');
Route::get('/checkout', [PaymentController::class, 'checkout'])->name('checkout');
Route::post('/charge', [PaymentController::class, 'charge'])->name('charge');

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'index'])->name('admin.home');
    Route::get('/admin/view-users', [HomeController::class, 'viewUsers'])->name('admin.view-users');
    Route::get('/admin/add-users', [HomeController::class, 'addUsers'])->name('admin.add-users');
    Route::post('/admin/creat-users', [HomeController::class, 'createUsers'])->name('admin.create-users');
    Route::get('/admin/reviews', [HomeController::class, 'viewReviews'])->name('admin.reviews');
    Route::get('/admin/cash-orders', [HomeController::class, 'viewCashOrders'])->name('admin.cash-orders');
    Route::get('/admin/online-orders', [HomeController::class, 'viewOnlineOrders'])->name('admin.online-orders');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

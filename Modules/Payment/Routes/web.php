<?php

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

use Illuminate\Support\Facades\Route;



Route::get('cart/{data}', 'PaymentController@cart');

Route::prefix('payment')->group(function() {
    Route::get('/', 'PaymentController@index');

    Route::get('/status', 'PaymentController@home')->name('home');
    Route::get('/cancelled', 'PaymentController@cancelled')->name('home.cancelled');
    Route::get('/failed', 'PaymentController@failed')->name('home.failed');
    Route::get('/success', 'PaymentController@success')->name('home.success');


    // Login
    Route::post('login', 'PaymentController@login_checkout')->name('login.checkout');
    Route::post('register', 'PaymentController@register_checkout')->name('register.checkout');
});

Route::prefix('billing')->middleware('auth')->group(function(){
    Route::get('pay', 'PaymentController@one_time_pay')->name('paynow');
    Route::get('invoice', 'PaymentController@one_time_pay_invoice')->name('paynowinvoice');
});


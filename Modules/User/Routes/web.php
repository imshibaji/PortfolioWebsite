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

Route::prefix('user')->middleware(['auth'])->group(function() {

    Route::get('', 'UserController@index')->name('user');
    Route::get('/learning', 'UserController@learning')->name('user.learning');
    Route::get('/profile', 'UserController@profile')->name('user.profile');
    Route::get('/support', 'UserController@support')->name('user.support');
    Route::get('/privacy', 'UserController@privacy')->name('user.privacy');
});

Route::prefix('tutorials')->middleware(['auth'])->group(function(){
    Route::get('/', 'TutorialController@index');
    Route::get('/{cat}', 'TutorialController@category');
    Route::get('/{cat}/{tut}', 'TutorialController@tutorial');
});

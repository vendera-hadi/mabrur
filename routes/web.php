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

Route::group(['middleware' => ['auth']], function () {
  Route::get('/', 'HomeController@index')->name('home');
  Route::get('/faq', 'HomeController@faq')->name('faq');
  Route::get('/timeline', 'HomeController@timeline')->name('timeline');
});

Route::get('/privacy', 'HomeController@privacy')->name('privacy');
Auth::routes();

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
  Route::post('/', 'HomeController@upload_tabungan')->name('upload_tabungan');
  Route::get('/vlog-link', 'HomeController@upload')->name('upload');
  Route::post('/vlog-link', 'HomeController@linkupload')->name('linkupload');
  Route::get('/gallery', 'HomeController@gallery')->name('galeri');
  Route::get('/terms', 'HomeController@terms')->name('terms');
  Route::get('/faq', 'HomeController@faq')->name('faq');
  Route::get('/timeline', 'HomeController@timeline')->name('timeline');
});

Route::get('/redirect', 'Auth\LoginController@redirectToProvider')->name('oauth_login');
Route::get('/callback', 'Auth\LoginController@handleProviderCallback');
Route::post('/google-register', 'HomeController@googlereg')->name('store_google');

Route::get('/privacy', 'HomeController@privacy')->name('privacy');
Auth::routes();

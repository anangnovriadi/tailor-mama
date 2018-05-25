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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');

Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset');


Route::get('/', 'HomeController@index')->name('dashboard');

Route::get('/customer', 'CustomerController@index')->name('customer.index');
Route::get('/customer/create', 'CustomerController@create')->name('customer.create');
Route::post('/customer/create', 'CustomerController@store')->name('customer.store');
Route::get('/customer/edit/{id}', 'CustomerController@edit')->name('customer.edit');
Route::patch('/customer/edit/{id}', 'CustomerController@update')->name('customer.update');
Route::delete('/customer/delete/{id}', 'CustomerController@destroy')->name('customer.destroy');

Route::get('/tailor', 'TailorController@index')->name('tailor.index');
Route::get('/tailor/create', 'TailorController@create')->name('tailor.create');
Route::post('/tailor/create', 'TailorController@store')->name('tailor.store');
Route::get('/tailor/edit/{id}', 'TailorController@edit')->name('tailor.edit');
Route::patch('/tailor/edit/{id}', 'TailorController@update')->name('tailor.update');
Route::delete('/tailor/delete/{id}', 'TailorController@destroy')->name('tailor.destroy');

Route::get('/pakaian', 'PakaianController@index')->name('pakaian.index');


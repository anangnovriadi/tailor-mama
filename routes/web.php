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

Route::get('/', function () {
    return view('admin.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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


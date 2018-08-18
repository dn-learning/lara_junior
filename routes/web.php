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

Auth::routes();

Route::match(['get', 'post'], 'register', function(){
    return redirect('/');
});

Route::get('/', 'CompanyController@index')->name('home');

Route::match(['get', 'post'], 'home', function(){
    return redirect('/');
});

Route::resource('companies','CompanyController');

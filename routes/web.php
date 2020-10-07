<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index');

Route::get('/admin/dashboard', 'Admin\DashboardController@index');

Route::get('/admin/create', 'Admin\DashboardController@create');
Route::post('/admin/post/create', 'Admin\DashboardController@store')->name('store');

Route::get('/admin/edit/{id}', 'Admin\DashboardController@edit');
Route::put('/admin/edit/update/{id}', 'Admin\DashboardController@update');

Route::get('/admin/delete/{id}', 'Admin\DashboardController@delete');



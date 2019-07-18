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

/*Frontend*/
Route::get('/', 'frontend\HomeController@index')->name('frontend');
/* /Frontend*/

/*Backend*/
Auth::routes();

Route::get('/admin', 'backend\AdminController@index')->name('admin');

Route::get('/admin/logout', 'backend\AdminController@logout')->name('logout');
/* /Backend*/

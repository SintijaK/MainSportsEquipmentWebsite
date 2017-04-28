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

Route::get('/', 'PagesController@welcome');
Route::get('/staffarea', 'PagesController@staffArea');
Route::get('/admin', 'PagesController@Admin');
Route::get('/aboutus', 'PagesController@aboutUs');
Route::get('/contactus', 'PagesController@contactUs');
    

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::prefix('/admin')->group(function() {
Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login.submit');
Route::get('/', 'AdminController@index')->name('admin.dashboard');
    });
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





Route::get('/', 'Front\HomeController@index');

Route::get('/admin', 'Back\DashboardController@index');
Route::resource('/back/newscenter', 'Back\NewsCenterController');




// Route::get('/back/newscenter', 'Back\NewsCenterController@showeditnews')->name('showeditnews');






Route::get('/showstaff', 'Back\DashboardController@showstaff')->name('showstaff');




// Auth::routes();
//
// Route::get('/home', 'HomeController@index')->name('home');
//
//
// Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
// Route::post('/admin/login', 'Auth\AdminLoginController@Login')->name('admin.login.submit');
// Route::get('/admin', 'AdminController@index')->name('admin.dashboard');

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





Route::get('/', 'Front\HomeController@index')->name('home');
Route::get('/teachingstaff', 'StaffController@showteachingstaff')->name('showteachingstaff');
Route::get('/supportstaff', 'StaffController@showsupportstaff')->name('showsupportstaff');

Route::get('/history', function(){
  return view('/front/history');
})->name('history');

Route::get('/ero', function(){
  return view('/front/ero');
})->name('ero');

Route::get('/vaccancy', function(){
  return view('/front/vaccancy');
})->name('vaccancy');




Route::get('/admin', 'Back\DashboardController@index');
Route::resource('/back/newscenter', 'Back\NewsCenterController');
Route::resource('/back/staff', 'StaffController');




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

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



Route::get('/', 'FrontController@index')->name('home');
Route::get('/donate', 'FrontController@donate')->name('donate');
Route::get('/about', 'FrontController@about')->name('about');
Route::get('/news', 'FrontController@news')->name('news');
Route::get('/contact', 'FrontController@contact')->name('contact');
Route::get('/success', 'FrontController@success')->name('success');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin', 'middleware'=>'auth'], function () {
  route::get('/', function () {
    return view('admin.index');
  })->name('admin.index');
});
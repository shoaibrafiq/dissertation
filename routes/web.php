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



Route::get('/', 'HomeController@index')->name('home');
Route::get('/donate', 'HomeController@donate')->name('donate');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/news', 'HomeController@news')->name('news');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/success', 'HomeController@success')->name('success');

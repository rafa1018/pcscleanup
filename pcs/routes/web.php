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

Route::get('/', 'WelcomeController@inicio')->name('welcome');
Route::get('/contact', 'WelcomeController@contact')->name('contact');
Route::get('/about-us', 'WelcomeController@about')->name('about');
Route::get('/services', 'WelcomeController@services')->name('services');
Route::get('/team', 'WelcomeController@team')->name('team');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('/contact','MailController@sendMail');
Route::post('/services','MailController@sendMail');

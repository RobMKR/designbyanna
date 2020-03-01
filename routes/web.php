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

Route::get('/', 'HomeController@index');
Route::post('/', 'HomeController@indexPost');
Route::get('/about', 'HomeController@about');
Route::get('/services', 'HomeController@service');
Route::get('/service/3d', 'HomeController@service3d');
Route::get('/service/interior', 'HomeController@serviceInt');
Route::get('/gallery', 'HomeController@gallery');
Route::get('/properties', 'HomeController@properties');
Route::get('/contact', 'HomeController@contact');
Route::post('/contact', 'HomeController@contactPost');

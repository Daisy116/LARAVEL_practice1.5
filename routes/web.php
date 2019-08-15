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

Route::get('/', "HomeController@index");
Route::get('/employees', "HomeController@index");

Route::get('/employeeDetails.html/{id}', "HomeController@detail");
// Route::get('/employeeDetails.html?id={id}', "HomeController@detail");
// Route::get('/employee/edit/{id}', "HomeController@edit");
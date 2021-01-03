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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'AdminController@login');

Route::get('/add', 'AdminController@add');

Route::post('/save', 'AdminController@addEmployee');

Route::get('/display', 'AdminController@display');

Route::get('/view/{id}', 'AdminController@viewProfile');

Route::post('/update', 'AdminController@updateEmployee');

Route::get('/delete/{id}', 'AdminController@deleteEmployee');

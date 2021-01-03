<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/login', 'AdminController@adminLogin');

Route::get('/add', 'AdminController@add');

Route::post('/save', 'AdminController@addEmployee');

Route::get('/display', 'AdminController@display');

Route::get('/view/{id}', 'AdminController@viewProfile');

Route::post('/update', 'AdminController@updateEmployee');

Route::post('/validate', 'AdminController@validateUser');

Route::get('/delete/{id}', 'AdminController@deleteEmployee');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

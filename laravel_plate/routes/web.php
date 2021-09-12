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

// Route::get('/', function () {
    // return view('welcome');
// });

Route::get('customer','App\Http\Controllers\CustomersController@index');
Route::get('/customer/add','App\Http\Controllers\CustomersController@add');
Route::post('/customer/add','App\Http\Controllers\CustomersController@create');
Route::get('/customer/edit','App\Http\Controllers\CustomersController@edit');
Route::post('/customer/edit','App\Http\Controllers\CustomersController@update');
Route::get('/customer/del','App\Http\Controllers\CustomersController@del');
Route::post('/customer/del','App\Http\Controllers\CustomersController@remove');


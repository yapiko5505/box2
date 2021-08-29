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

Route::get('/address','App\Http\Controllers\AddressController@index');
Route::post('/address','App\Http\Controllers\AddressController@post');
Route::get('/address/add','App\Http\Controllers\AddressController@add');
Route::post('/address/add','App\Http\Controllers\AddressController@create');
Route::get('/address/edit','App\Http\Controllers\AddressController@edit');
Route::post('/address/edit','App\Http\Controllers\AddressController@update');
Route::get('/address/delete','App\Http\Controllers\AddressController@delete');
Route::post('/address/delete','App\Http\Controllers\AddressController@remove');





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

  //  Route::group(['prefix' => 'customer'], function(){
    Route::get('/customer/list','App\Http\Controllers\CustomerController@getIndex');
    Route::get('/customer/new','App\Http\Controllers\CustomerController@new_index');
    Route::patch('/customer/new','App\Http\Controllers\CustomerController@new_confirm');
    Route::post('/customer/new','App\Http\Controllers\CustomerController@new_finish');
    Route::get('/customer/edit/{id}','App\Http\Controllers\CustomerController@edit_index');
    Route::patch('/customer/edit/{id}','App\Http\Controllers\CustomerController@edit_confirm');
    Route::post('/customer/edit/{id}','App\Http\Controllers\CustomerController@edit_finish');
    Route::get('/customer/delete/{id}','App\Http\Controllers\CustomerController@delete');
    Route::post('/customer/delete/{id}','App\Http\Controllers\CustomerController@remove');

    // });
    
    
    
    
    
    
    


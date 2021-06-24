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


 Route::get('/plan', 'App\Http\Controllers\HelloController@index');
Route::post('/plan', 'App\Http\Controllers\HelloController@index');
//  Route::get('go/session','App\Http\Controllers\GoController@ses_get');
//  Route::post('go/session','App\Http\Controllers\GoController@ses_put');


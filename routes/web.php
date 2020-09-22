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

Route::get('/', 'App\http\controllers\WelcomeController@index')->name('welcome');
Route::get('/help/api', 'App\http\controllers\ApiController@index')->name('help.api');
Route::resource('category', 'App\http\controllers\CategoryController');
Route::resource('product', 'App\http\controllers\ProductController');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/form', 'UserController@add')->name('add');
Route::post('/form-submit', 'UserController@submit')->name('submit');
Route::get('/list', 'UserController@list')->name('list');
Route::get('/edit/{user}', 'UserController@edit')->name('edit');
Route::post('/form-update', 'UserController@update')->name('update');
Route::delete('/delete/{user}', 'UserController@delete')->name('delete');

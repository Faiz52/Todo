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

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('todo' , 'TodoController@index');
Route::get('todo/create' , 'TodoController@create');
Route::post('todo' , 'TodoController@store');
Route::get('todo/{todo}' , 'TodoController@show');
Route::get('todo/{todo}/edit' , 'TodoController@edit');
Route::post('todo/{todo}' , 'TodoController@update');
Route::get('todo/{todo}' , 'TodoController@destroy');
Route::get('todo/{todo}/complete' , 'TodoController@complete');
*/

Route::get('todo/{todo}/complete' , 'TodoController@complete');
Route::resource('todo' , 'TodoController');
 

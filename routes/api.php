<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('api')->get('/todos', 'TodoController@index')->name('todos');
Route::middleware('api')->post('/todos', 'TodoController@store')->name('todos.store');
Route::middleware('api')->put('/todos/{todo}', 'TodoController@update')->name('todos.update');
Route::middleware('api')->get('/todos/{todo}', 'TodoController@show')->name('todos.show');
Route::middleware('api')->delete('/todos/{todo}', 'TodoController@delete')->name('todos.delete');

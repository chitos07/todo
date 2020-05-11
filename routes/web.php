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


Route::get('/todo', 'TodoController@index');
Route::get('/todo/{todo}', 'TodoController@show')->name('show.todo');
Route::get('/create', 'TodoController@create')->name('create.todo');
Route::get('/todo/{todo}/edit','TodoController@edit' )->name('edit.todo');
    

Route::post('/todo', 'TodoController@store')->name('store.todo');

Route::patch('/todo/{todo}', 'TodoController@update')->name('update.todo');



Route::get('/todo/{todo}/delete','TodoController@destroy' )->name('delete.todo');

//Route::get('/todo/create', 'TodoController@create')->name('create.todo');
Route::get('/todo/{todo}/Completed', 'TodoController@Done')->name('completed.todo');
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


Route::resource('/', 'TicketsController');
Route::GET('/{slug}', 'TicketsController@show');
Route::GET('/{slug}/edit', 'TicketsController@edit');
Route::PUT('/{slug}', 'TicketsController@update');
Route::DELETE('/{slug}', 'TicketsController@destroy');

Route::POST('/Comment', 'CommentsController@NewComment');
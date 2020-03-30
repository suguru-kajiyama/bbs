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
    return view('top');
});
Route::get('/signup',function() {
    return view('signup',);
});
Route::post( '/login','userController@login' );
Route::post( '/signup/create','userController@create' );
Route::get( '/contents','titleController@index');
Route::post( '/contents/create','titleController@createTitle');
Route::get( '/contents/{id}','commentController@index');
Route::post('/contents/{id}/create','commentController@create');


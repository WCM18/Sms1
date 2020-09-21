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


Route::get('/', function () {
    return view('welcome');
});
*/
use Illuminate\Support\Facades\Route;
Route::get('/',"StudentController@index");
Route::get('/edit/{id}',"StudentController@edit");
Route::get('/destroy/{id}',"StudentController@destroy");

Route::get('/show/{id}',"StudentController@index");
Route::get('/create',"StudentController@create");
Route::post('/store',"StudentController@store");
Route::post('/update/{id}',"StudentController@update");
Route::patch('/restore/{id}','NotesController@restore');
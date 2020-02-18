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
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('user', 'UserController@index'); // Hiển thị danh sách
Route::get('user/create', 'UserController@create'); // Thêm mới
Route::post('user/create', 'UserController@store'); // Xử lý thêm mới 
Route::get('user/{id}/edit', 'UserController@edit'); // Sửa
Route::post('user/update', 'UserController@update'); // Xử lý sửa 
Route::get('user/{id}/delete', 'UserController@destroy'); // Xóa 

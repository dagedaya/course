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

use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/course/index','CourseController@index');//从一张表中取出所有行
// Route::get('course/cloumn','CourseController@cloumn');//从一张表中获取一行或一列
// Route::get('course/value','CourseController@value');//获取字段值得列表
// Route::get('course/count','CourseController@count');//查询总条数

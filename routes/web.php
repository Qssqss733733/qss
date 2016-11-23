<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Route::group(['prefix' => 'admin'], function () {
//    Route::get('users', function () {
//        // 匹配 "/admin/users" URL
//    });
//});
Route::get('/user/{id}','Usercontroller@index');
Route::get('/login','Logincontroller@index');

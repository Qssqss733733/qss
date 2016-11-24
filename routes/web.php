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
//隐士控制器
//Route::get('/user/{id}','Usercontroller@index');
//Route::get('/login','Logincontroller@index');

//命名路由
//Route::get('user/profile', function () {
//    //
//})->name('profile');
//Route::get('user/{id}/profile', ['as' => 'profile', function ($id) {
//    return 'user';
//}]);
//$url = route('profile', ['id' => 1]);
//命名空间
//Route::group(['namespace' => 'Admin'], function(){
//
//    Route::get('user','Usercontroller@index');
//    Route::get('user2','User2controller@index');
//
//});
//路由前缀
Route::group(['prefix' => 'admin'], function () {
    Route::get('user', function () {
        // 匹配 "/admin/users" URL
        return 'admin/user';
    });
    Route::get('user2', function () {
        // 匹配 "/admin/users" URL
        return 'admin/user2';
    });
});



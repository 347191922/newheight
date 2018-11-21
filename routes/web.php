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
// 前台首页
Route::get('/','Home\IndexController@index')->name('index');

// 服务范围
Route::get('/services','Home\ServicesController@services')->name('services');

// 案例
Route::get('/projects','Home\ProjectsController@projects')->name('projects');

// 资讯
// 公司资讯
Route::get('/icons','Home\InformationController@icons')->name('icons');

// 行业资讯
Route::get('/typography','Home\InformationController@typography')->name('typography');

// 关于
Route::get('/about','Home\AboutController@contact')->name('contact');

//Route::group(['namespace'=>'Home'],function (){
//    Route::get('/',[
//        'as'=>'index','user'=>'IndexController@index'
//    ]);
//});

// 后台登录页
Route::get('/login','Admin\LoginController@login')->name('login');

Route::post('login_vil','Admin\LoginController@login_vil')->name('login_vil');
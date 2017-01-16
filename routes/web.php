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
//namespace Web
Route::group(['namespace' => 'Web'], function () {

    //會員登入
    Route::get('/login',function(){
        return view('web/login');
    })->name('login');    

    //登入確認
    Route::post('/login_check','MemberController@loginCheck');
 });

//驗證登入    
Route::group(['middleware' => 'check.login'], function () {

    //會員登入驗證
    Route::get('/', function ()    {
        return view('welcome');
    });
    //namespace Web
    Route::group(['namespace' => 'Web'], function () {
        
    });
});

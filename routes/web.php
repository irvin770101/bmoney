<?php
//
//                       _oo0oo_
//                      o8888888o
//                      88" . "88
//                      (| -_- |)
//                      0\  =  /0
//                    ___/`---'\___
//                  .' \\|     |// '.
//                 / \\|||  :  |||// \
//                / _||||| -:- |||||- \
//               |   | \\\  -  /// |   |
//               | \_|  ''\---/''  |_/ |
//               \  .-\__  '-'  ___/-. /
//             ___'. .'  /--.--\  `. .'___
//          ."" '<  `.___\_<|>_/___.' >' "".
//         | | :  `- \`.;`\ _ /`;.`/ - ` : | |
//         \  \ `_.   \_ __\ /__ _/   .-` /  /
//     =====`-.____`.___ \_____/___.-`___.-'=====
//                       `=---='
//
//
//     ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//
//               佛祖保佑         永無bug
//
//***************************************************
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
    
    //新註冊
    Route::get('/register',function()
    {
        return view('web/register');
    })->name('register');
    
    //註冊送出
    Route::post('/register_save', 'MemberController@registerSave')->name('register_save');    
    
    //登出
    Route::get('/logout',function()
    {
        //清除session
        session()->forget('member');
        return redirect()->route('login');
    })->name('logout');
    
    //寄信
    Route::get('send_mail', function()
    {
        Mail::raw('測試使用 Laravel 5 的 Mailgun 寄信服務', function($message)
        {
            $message->to('chuang.f.c@gmail.com');
        });
    });
    
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

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
    return view('welcome');
});

Route::get('login',function(){
	return view('login');
});

Route::get('register',function(){
	return redirect('show_register');
});

Route::get('show_register',function(){
	return view('register');
});

Route::post('register_d','registerController@insert');

Route::get('view_reply',function(){
	return view('view_reply');
});

Route::post('view','replyController@show');

Route::post('login_action','loginController@login');

Route::get('show','registerController@showall');

Route::get('delete/{random}','registerController@delete');

Route::get('reply/{random}','registerController@reply');

Route::post('reply','replyController@insert');

Route::get('view_report','replyController@showall');

Route::get('change_password','loginController@changepassword');

Route::post('change_password_action','loginController@changeps');

Route::get('logout','loginController@logout');

Route::post('report','replyController@report');

Route::get('page',function(){
	return view('report_generate');
});


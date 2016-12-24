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

Auth::routes();

// 사용자가 인증 요청했을 때 깃허브 인증 페이지로 리다이렉트합니다
Route::get('login/github', 'Auth\GithubLoginController@redirectToGitHub');

Route::get('/home', 'HomeController@index');

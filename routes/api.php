<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('login', 'ApiController@login');
Route::post('register', 'ApiController@register');
Route::post('reset','ResetPasswordController@forgetPassword');
Route::post('token','ResetPasswordController@checkToken');
Route::post('reset/password','ResetPasswordController@ResetPassword');

Route::group(['middleware' => 'auth.jwt'], function () {
    Route::get('logout', 'ApiController@logout');
    Route::get('user', 'ApiController@getAuthUser');
    Route::get('articles', 'ArticlesController@index');
    Route::post('articles', 'ArticlesController@store');
    Route::get('articles/{id}', 'ArticlesController@show');
});

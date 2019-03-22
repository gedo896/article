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


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('','PagesController@home')->name('Home');

Auth::routes();

Route::group(['prefix'=> 'article'],function (){
    Route::get('index','ArticleController@index')->name('article.index');

    Route::get('create','ArticleController@create')->name('article.create')->middleware('can:user-only');
    Route::post('store','ArticleController@store')->name('article.store')->middleware('can:user-only');
    Route::get('show/{id}','ArticleController@show')->name('article.show');
});







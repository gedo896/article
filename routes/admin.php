<?php

use App\Notifications\RegisterUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('','AuthController@login')->name('Login');
Route::post('auth','AuthController@auth')->name('admin.auth');
Route::get('logout','AuthController@logout')->name('logout');
Route::group(['middleware'=> 'auth'],function(){
    Route::get('dashboard','PagesController@admin')->name('Admin');
    Route::resource('users','UsersController');
    Route::group(['prefix' => 'articles'],function (){
        Route::get('index','ArticleController@index')->name('articles.index');
        Route::get('show/{article}','ArticleController@show')->name('articles.show');
        Route::get('approved/{article}','ArticleController@approved')->name('articles.approved');
        Route::get('rejected/{article}','ArticleController@rejected')->name('articles.rejected');
    });
});

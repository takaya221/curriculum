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

/*getリクエストを受け取るとPostControllerのindexを返す*/
Route::get('/', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
/*POSTアクセスを受けるとPostControllerのstoreを返す*/
Route::get('/posts/{post}', 'PostController@show');
Route::post('/posts', 'PostController@store');

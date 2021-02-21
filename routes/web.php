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

// ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// ログイン
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

// チームページ（選手一覧ページ）
Route::get('players', 'PlayersController@index')->name('players.players');

// 選手ページ
Route::get('player/{player}', 'PlayersController@show')->name('players.player');


Route::group(['middleware' => ['auth']], function () {
    //投稿用ページを表示する
    Route::get('posts/create/player/{player}', 'PostsController@create')->name('posts.create');
    //投稿の処理
    Route::post('posts/player/{player}', 'PostsController@store')->name('posts.store');
    //編集用ページを表示する
    Route::get('posts/{mypost}/edit', 'PostsController@edit')->name('posts.edit');
    //編集の処理
    Route::put('posts/{mypost}', 'PostsController@update')->name('posts.update');
    //削除
    Route::delete('posts/{mypost}', 'PostsController@destroy')->name('posts.delete');
});

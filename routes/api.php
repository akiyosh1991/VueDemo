<?php

use Illuminate\Http\Request;

// 会員登録
Route::post('/register', 'Auth\RegisterController@register')->name('register');

// ログイン
Route::post('/login', 'Auth\LoginController@login')->name('login');

// ログアウト
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/user', fn () => Auth::user())->name('user');

Route::post('/event/create', 'EventController@create')->name('event.create');

Route::get('/event', 'EventController@index')->name('event.index');

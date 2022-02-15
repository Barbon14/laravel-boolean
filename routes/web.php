<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'GuestController@home') -> name('home');

// register/login

Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::post('/register', 'Auth\RegisterController@register')->name('register');

// postcard

Route::middleware('auth')
        -> name('postcard.')
        -> prefix('postcard')
        -> group(function() {
            Route::get('/create', 'PostcardController@create') ->name ('create');
            Route::post('/store', 'PostcardController@store')->name('store');
});
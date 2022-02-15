<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'GuestController@home')->name('home');

// -------------------------------------------------------------

Route::get('/api/postcards/list', 'ApiController@getPostCards') -> name('api.postcards.list');
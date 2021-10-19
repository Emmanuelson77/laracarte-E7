<?php

use Illuminate\Support\Facades\Route;



Route::get('/', [
    'as' => 'root_path',
    'uses' => 'PagesController@home'
]);

Route::get('/about', [
    'as' => 'about_path',
    'uses' => 'PagesController@about'
]);



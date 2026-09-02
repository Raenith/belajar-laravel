<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sapa', function() {
    return 'Hello World!';
});

Route::get('/profile', function() {
    return view('profile');
});

Route::get('/home', function() {
    $nama = 'Ambi';

    return view('home', compact('nama'));
});
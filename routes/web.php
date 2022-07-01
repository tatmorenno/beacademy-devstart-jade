<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('users.login');
})->name('users.login');

Route::get('/cadastro', function() {
    return view('users.add');
})->name('users.add');

<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/login/admin', [AdminController::class, 'login'])->name('admin.login');

Route::get('/login', [UserController::class, 'login'])->name('users.login');
Route::get('/cadastro', [UserController::class, 'create'])->name('users.create');
Route::post('/cadastro', [UserController::class, 'store'])->name('users.store');
Route::get('/cadastro/erro', [UserController::class, 'create_error'])->name('users.create_error');
Route::get('/cadastro/sucesso', [UserController::class, 'create_success'])->name('users.create_success');




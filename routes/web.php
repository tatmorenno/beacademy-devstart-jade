<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/login/admin', [AdminController::class, 'login'])->name('admin.login');

Route::get('/login', [UserController::class, 'login'])->name('users.login');
Route::get('/cadastro', [UserController::class, 'create'])->name('users.create');
Route::post('/cadastro', [UserController::class, 'store'])->name('users.store');
Route::get('/cadastro/erroemail', [UserController::class, 'email_error'])->name('users.email_error');
Route::get('/cadastro/errocpf', [UserController::class, 'cpf_error'])->name('users.cpf_error');
Route::get('/cadastro/sucesso', [UserController::class, 'create_success'])->name('users.create_success');




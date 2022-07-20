<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserController,
    AdminController,
    ProductController
};

require __DIR__ . '/auth.php';


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {

    // Content after auth
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
});


Route::get('/login/admin', [AdminController::class, 'login'])->name('admin.login');

// Route::get('/login', [UserController::class, 'login'])->name('users.login');
Route::get('/cadastro', [UserController::class, 'create'])->name('users.create');
Route::post('/cadastro', [UserController::class, 'store'])->name('users.store');
Route::get('/cadastro/erroemail', [UserController::class, 'email_error'])->name('users.email_error');
Route::get('/cadastro/errocpf', [UserController::class, 'cpf_error'])->name('users.cpf_error');
Route::get('/cadastro/sucesso', [UserController::class, 'create_success'])->name('users.create_success');

Route::put('/users/{id}', [UserController::class, 'updateUsers'])->name('users.update');
Route::get('/users/{id}/edit', [UserController::class, 'editUsers'])->name('users.edit');
Route::get('/users', [UserController::class, 'listUsers'])->name('users.list');
Route::get('/users/{id}', [UserController::class, 'showUsers'])->name('users.show');

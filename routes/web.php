<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserController,
    AdminController,
    CheckoutController,
    ProductController
};

require __DIR__ . '/auth.php';


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



// Route::get('/login/admin', [AdminController::class, 'login'])->name('admin.login');

// Route::get('/login', [UserController::class, 'login'])->name('users.login');
Route::get('/cadastro', [UserController::class, 'create'])->name('users.create');
Route::post('/cadastro', [UserController::class, 'store'])->name('users.store');
Route::get('/cadastro/erroemail', [UserController::class, 'email_error'])->name('users.email_error');
Route::get('/cadastro/errocpf', [UserController::class, 'cpf_error'])->name('users.cpf_error');
Route::get('/cadastro/sucesso', [UserController::class, 'create_success'])->name('users.create_success');


// Content after auth
//Content after authentication for customers
Route::middleware(['auth'])->group(function () {

    Route::get('/review', [CheckoutController::class, 'review'])->name('checkout.review');
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');

    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
    Route::get('/checkout', [CheckoutController::class, 'storeCart'])->name('checkout.storeCart');
    Route::post('/checkout/submit', [CheckoutController::class, 'submit'])->name('checkout.submit');
});

// Content after admin auth
Route::middleware('admin')->group(function () {

    // Users
    Route::get('/admin/users', [UserController::class, 'listUsers'])->name('users.list');
    Route::get('/admin/users/{id}', [UserController::class, 'showUsers'])->name('users.show');
    Route::put('/admin/users/{id}', [UserController::class, 'updateUsers'])->name('users.update');
    Route::get('/admin/users/{id}/edit', [UserController::class, 'editUsers'])->name('users.edit');
    Route::delete('/admin/users/{id}', [UserController::class, 'destroyUsers'])->name('users.destroy');

    // Products
    Route::get('/admin/products', [ProductController::class, 'indexAdmin'])->name('products.indexAdmin');
    Route::get('/admin/products/create', [ProductController::class, 'createProductsAdmin'])->name('products.create');
    Route::post('/admin/products/create', [ProductController::class, 'storeCreateProductsAdmin'])->name('products.store');
    Route::get('/admin/products/{id}', [ProductController::class, 'showProductsAdmin'])->name("products.showAdmin");
    Route::put('/admin/products/{id}', [ProductController::class, 'updateProductsAdmin'])->name('products.update');
    Route::get('/admin/products/{id}/edit', [ProductController::class, 'editProductsAdmin'])->name('products.edit');
    Route::delete('/admin/products/{id}', [ProductController::class, 'destroyProductsAdmin'])->name('products.destroy');
});

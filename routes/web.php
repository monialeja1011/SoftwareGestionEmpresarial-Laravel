<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SaleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $usuarios = \App\Models\User::count();
    $clientes = \App\Models\Client::count();
    $productos = \App\Models\Product::count();
    $ventas = \App\Models\Sale::count();

    return view('dashboard', compact(
        'usuarios',
        'clientes',
        'productos',
        'ventas'
    ));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

    Route::resource('products', ProductController::class);

    Route::resource('clients', ClientController::class);

    Route::resource('sales', SaleController::class);
});

require __DIR__.'/auth.php';
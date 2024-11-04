<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\ProductsController;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ModelsController;
use App\Http\Controllers\ColorsController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\CollectionsController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\ProductSizeController;

Route::prefix('')->group(function () {
    Route::get('', [AppController::class, 'index'])->name('home');
    Route::get('products', [AppController::class, 'products'])->name('products');
    Route::get('contact-us', [AppController::class, 'contacts'])->name('contact-us');
    Route::get('about-us', [AppController::class, 'aboutUs'])->name('about-us');
    Route::get('products/product/{product_id}', [AppController::class, 'productDetail'])->name('product-detail');
});

Route::prefix('auth')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('sign-in', [AuthController::class, 'auth'])->name('user-auth');
});


Route::middleware([AuthMiddleware::class])->prefix('admin')->group(function () {
    Route::get('', [AdminController::class, 'index'])->name('admin-index');

    Route::prefix('categories')->group(function () {
        Route::get('', [CategoriesController::class, 'index'])->name('admin-categories');
        Route::get('create', [CategoriesController::class, 'create'])->name('admin-categories-create');
        Route::get('edit/{id}', [CategoriesController::class, 'edit'])->name('admin-categories-edit');

        Route::post('store', [CategoriesController::class, 'store'])->name('admin-categories-store');
        Route::post('update', [CategoriesController::class, 'update'])->name('admin-categories-update');
        Route::post('delete', [CategoriesController::class, 'delete'])->name('admin-categories-delete');
    });

    Route::prefix('models')->group(function () {
        Route::get('', [ModelsController::class, 'index'])->name('admin-models');
        Route::get('create', [ModelsController::class, 'create'])->name('admin-models-create');
        Route::get('edit/{id}', [ModelsController::class, 'edit'])->name('admin-models-edit');

        Route::post('create', [ModelsController::class, 'store'])->name('admin-models-store');
        Route::post('update', [ModelsController::class, 'update'])->name('admin-models-update');
        Route::post('delete', [ModelsController::class, 'delete'])->name('admin-models-delete');
    });

    Route::prefix('colors')->group(function () {
        Route::get('', [ColorsController::class, 'index'])->name('admin-colors');
        Route::get('create', [ColorsController::class, 'create'])->name('admin-colors-create');
        Route::get('edit/{id}', [ColorsController::class, 'edit'])->name('admin-colors-edit');

        Route::post('create', [ColorsController::class, 'store'])->name('admin-colors-store');
        Route::post('update', [ColorsController::class, 'update'])->name('admin-colors-update');
        Route::post('delete', [ColorsController::class, 'delete'])->name('admin-colors-delete');
    });

    Route::prefix('collections')->group(function () {
        Route::get('', [CollectionsController::class, 'index'])->name('admin-collections');
        Route::get('create', [CollectionsController::class, 'create'])->name('admin-collections-create');
        Route::get('edit/{id}', [CollectionsController::class, 'edit'])->name('admin-collections-edit');

        Route::post('create', [CollectionsController::class, 'store'])->name('admin-collections-store');
        Route::post('update', [CollectionsController::class, 'update'])->name('admin-collections-update');
        Route::post('delete', [CollectionsController::class, 'delete'])->name('admin-collections-delete');
    });

    Route::prefix('currencies')->group(function () {
        Route::get('', [CurrencyController::class, 'index'])->name('admin-currencies');
        Route::get('create', [CurrencyController::class, 'create'])->name('admin-currencies-create');
        Route::get('edit/{id}', [CurrencyController::class, 'edit'])->name('admin-currencies-edit');

        Route::post('create', [CurrencyController::class, 'store'])->name('admin-currencies-store');
        Route::post('update', [CurrencyController::class, 'update'])->name('admin-currencies-update');
        Route::post('delete', [CurrencyController::class, 'delete'])->name('admin-currencies-delete');
    });

    Route::prefix('products')->group(function () {
        Route::get('', [ProductsController::class, 'index'])->name('admin-products');
        Route::get('show/{id}', [ProductsController::class, 'show'])->name('admin-product-show');
        Route::get('create', [ProductsController::class, 'create'])->name('admin-product-create');
        Route::get('edit/{id}', [ProductsController::class, 'edit'])->name('admin-product-edit');

        Route::post('create', [ProductsController::class, 'store'])->name('admin-product-store');
        Route::post('update', [ProductsController::class, 'update'])->name('admin-product-update');
        Route::post('delete/{id}', [ProductsController::class, 'delete'])->name('admin-product-delete');

        Route::post('image/create', [ImageController::class, 'store'])->name('admin-product-image-store');
        Route::post('image/update', [ImageController::class, 'update'])->name('admin-product-image-update');
        Route::post('image/delete/{id}', [ImageController::class, 'delete'])->name('admin-product-image-delete');
    });
});

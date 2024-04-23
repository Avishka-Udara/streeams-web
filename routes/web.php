<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Userlist;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// admin part
Route::prefix('admin')->middleware(['auth','userRole'])->group(function () {
    
    //Admin
    Route::get('', [Userlist::class, 'adminPage'])->name('admin.admin');
    Route::get('{id}/edit', [Userlist::class, 'edit'])->name('admin.adminEdit');
    Route::put('{id}', [Userlist::class, 'adminUpdate'])->name('admin.adminUpdate');
    Route::delete('delete/{id}', [Userlist::class, 'adminDelete'])->name('admin.adminDelete');

    //Category
    Route::get('category', [CategoryController::class, 'index'])->name('admin.categories.index');
    Route::get('category/create', [CategoryController::class, 'create'])->name('admin.categories.create');
    Route::post('category', [CategoryController::class, 'store'])->name('admin.categories.store');
    Route::get('category/{id}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
    Route::put('category/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
    Route::delete('category/{id}', [CategoryController::class, 'delete'])->name('admin.categories.delete');

    //Product
    Route::get('category/product', [ProductController::class, 'index'])->name('admin.product.index');
    Route::get('category/product/create', [ProductController::class, 'create'])->name('admin.product.create');
    Route::post('category/product', [ProductController::class, 'store'])->name('admin.product.index');
    Route::get('category/product/{id}/edit', [ProductController::class, 'edit'])->name('admin.product.edit');
    Route::put('category/product/{id}', [ProductController::class, 'update'])->name('admin.product.update');
    Route::delete('category/product/{id}', [ProductController::class, 'delete'])->name('admin.product.delete');

    //News
    Route::get('news', [NewsController::class, 'index'])->name('admin.news.index');
    Route::get('news/create', [NewsController::class, 'create'])->name('admin.news.create');
    Route::post('news', [NewsController::class, 'store'])->name('admin.news.store');
    Route::get('news/{id}/edit', [NewsController::class, 'edit'])->name('admin.news.edit');
    Route::put('news/{id}', [NewsController::class, 'update'])->name('admin.news.update');
    Route::delete('news/{id}', [NewsController::class, 'delete'])->name('admin.news.delete');
    Route::get('news/{id}', [NewsController::class, 'show'])->name('admin.news.show');


    //invalid route rederect
    Route::get('{any}', function () {
        return view('/');
    })->where('any', '.*');

});
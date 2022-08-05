<?php

use App\Http\Controllers\categoriescontroller;
use App\Http\Controllers\contactController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\singleController;
use App\Models\categories;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('user.home');
});

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// user
Route::get('/', [App\Http\Controllers\productsController::class, 'index'])->name('user.home');
// categories
Route::get('categories',[categoriescontroller::class,'index'])->name('categories.admin');
Route::get('categories/create',[categoriescontroller::class,'create'])->name('categories.create');
Route::post('categories/store',[categoriescontroller::class,'store'])->name('categories.store');
Route::get('categories/update/{id}',[categoriescontroller::class,'edit'])->name('categories.edit');
Route::post('categories/update/{id}',[categoriescontroller::class,'update'])->name('categories.update');
Route::get('categories/delete/{id}',[categoriescontroller::class,'destroy'])->name('categories.delete');
// product
Route::get('product',[productsController::class,'admin'])->name('product.admin');
Route::get('product/create',[productsController::class,'create'])->name('products.create');
Route::post('product/store',[productsController::class,'store'])->name('products.store');
Route::get('product/update/{id}/{id_cate}',[productsController::class,'edit'])->name('products.edit');
Route::post('product/update/{id}',[productsController::class,'update'])->name('products.update');
Route::get('product/delete/{id}',[productsController::class,'destroy'])->name('products.delete');
// Single_page
Route::get('single_page',[singleController::class,'index'])->name('user.single');
// Contact
Route::get('contact',[contactController::class,'index'])->name('user.contact');
Route::post('contact/store',[contactController::class,'store'])->name('contact.store');
// Search
Route::post('search',[searchController::class,'search'])->name('search');
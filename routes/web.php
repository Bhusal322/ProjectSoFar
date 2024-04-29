<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\SellerController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/blogposts', [HomeController::class, 'blogposts'])->name('blogposts');
Route::get('/login', [HomeController::class, 'login'])->name('login');

Route::get('/adminaccounts', [AdminController::class, 'adminaccounts'])->name('admin.accounts');
Route::get('/adminhome', [AdminController::class, 'adminhome'])->name('admin.home');
Route::get('/adminmyaccount', [AdminController::class, 'adminmyaccount'])->name('admin.myaccount');
Route::get('/adminposts', [AdminController::class, 'adminposts'])->name('admin.posts');

Route::get('/buyer', [BuyerController::class, 'buyer'])->name('buyer.home');
Route::get('/myaccountbuyer', [BuyerController::class, 'myaccountbuyer'])->name('buyer.myaccount');
Route::get('/myprojects', [BuyerController::class, 'myprojects'])->name('buyer.myprojects');
Route::get('/searchbuyer', [BuyerController::class, 'searchbuyer'])->name('buyer.search');

Route::get('/myaccount', [SellerController::class, 'myaccount'])->name('seller.myaccount');
Route::get('/seller', [SellerController::class, 'seller'])->name('seller.home');
Route::get('/sellerbrowse', [SellerController::class, 'sellerbrowse'])->name('seller.browse');








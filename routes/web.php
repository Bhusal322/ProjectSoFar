<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\SellerController;

//Navigation
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/viewblogposts', [HomeController::class, 'blogposts'])->name('blogposts');

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



//Signing Up
use App\Http\Controllers\SignupController;

Route::get('/signup', [SignupController::class, 'showForm'])->name('signup.form');
Route::post('/signup', [SignupController::class, 'store'])->name('signup.submit');


//Logging in
use App\Http\Controllers\LoginController;
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');




// Edit the homepage
use App\Http\Controllers\EditableTextController;
Route::get('/home', [EditableTextController::class, 'index'])->name('home');
Route::get('/', [EditableTextController::class, 'index']);
Route::post('/editable-text/update', [EditableTextController::class, 'update'])->name('editable-text.update');
Route::post('/editable-text/delete', [EditableTextController::class, 'delete'])->name('editable-text.delete');
Route::post('/editable-text/store', [EditableTextController::class, 'store'])->name('editable-text.store');


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CredentialController;

// Displaying services and credentials
Route::middleware(['auth'])->group(function () {
    Route::get('/seller/myaccount', [ProfileController::class, 'myAccount'])->name('seller.myaccount');
});

// Storing services
Route::post('/seller/myaccount/services', [ProfileController::class, 'store'])->name('services.store');

// Storing credentials
Route::post('/seller/myaccount/credentials', [ProfileController::class, 'CredStore'])->name('credentials.store');


use App\Http\Controllers\ProjectController;

Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');



Route::post('/buyer/update', [BuyerController::class, 'update'])->name('buyer.update');

use App\Http\Controllers\BlogController;

Route::get('/blogposts', [BlogController::class, 'showPosts'])->name('blogposts');
Route::post('/create-post', [BlogController::class, 'createPost'])->name('create.post');













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

Route::delete('/delete-person/{id}', [AdminController::class, 'deletePerson'])->name('person.delete');
Route::get('/person/{id}', [AdminController::class, 'showPersonDetails'])->name('person.details');


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

use App\Http\Controllers\ImageController;


Route::post('/images/upload', [ImageController::class, 'upload'])->name('images.upload');


Route::get('/viewblogposts', [ImageController::class, 'index'])->name('blogposts');


use App\Http\Controllers\ProjectController;

Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');


Route::post('/buyer/update', [BuyerController::class, 'update'])->name('buyer.update');





Route::put('/update-service/{id}', [ProfileController::class, 'updateService'])->name('update-service');
Route::delete('/delete-service/{id}', [ProfileController::class, 'deleteService'])->name('delete-service');


Route::put('/update-credential/{id}', [ProfileController::class, 'updateCredential'])->name('update-credential');
Route::delete('/delete-credential/{id}', [ProfileController::class, 'deleteCredential'])->name('delete-credential');



Route::post('/store-experience', [ProfileController::class, 'storeExperience'])->name('store.experience');

Route::put('/update-experience/{id}', [ProfileController::class, 'updateExperience'])->name('update-experience');
Route::delete('/delete-experience/{id}', [ProfileController::class, 'deleteExperience'])->name('delete-experience');






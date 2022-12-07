<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\AccountsController;

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



// Index of Laravel
Route::get('/framework', function () {
    return view('welcome');
});


// Index Endpoint
Route::get('/', [PostsController::class, 'index']);
Route::get('/portal', [PostsController::class, 'portal'])->middleware('alreadyLoggedIn');

// Login
Route::post('user-login', [AccountsController::class, 'userLogin'])->name('user-login');

// User Successful login
Route::get('/admin', [AccountsController::class, 'adminDashboard'])->middleware('isLoggedIn');
Route::get('/educator', [AccountsController::class, 'educatorDashboard'])->middleware('isLoggedIn');

// Admin Accounts Table
Route::get('/accounts', [AccountsController::class, 'accountsTable'])->middleware('isLoggedIn');

// Logout Route
Route::get('/logout', [AccountsController::class, 'logout']);

// Continue Session
Route::get('/continue', [AccountsController::class, 'continueSession']);

// Update Accounts
Route::post('update-accounts', [AccountsController::class, 'updateAccounts']);
<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.dashboard');
});

// Auth
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/forget-password', [LoginController::class, 'forgetPassword'])->name('forgetPassword');
Route::get('/check-otp', [LoginController::class, 'checkOTP'])->name('checkOTP');
Route::get('/reset-password', [LoginController::class, 'resetPassword'])->name('resetPassword');

Route::resource('role', RoleController::class);
Route::resource('user', UserController::class);
Route::resource('admin', AdminController::class);
Route::resource('subscriber', SubscriberController::class);
Route::resource('package', PackageController::class);

// Finance
Route::get('deposit-list', [FinanceController::class, 'depositList'])->name('depositList');
Route::get('pending-deposit', [FinanceController::class, 'pendingDeposit'])->name('pendingDeposit');
Route::get('withdraw-list', [FinanceController::class, 'withdrawList'])->name('withdrawList');
Route::get('pending-withdraw', [FinanceController::class, 'pendingWithdraw'])->name('pendingWithdraw');
Route::get('add-credit', [FinanceController::class, 'addCredit'])->name('addCredit');
Route::get('credit-list', [FinanceController::class, 'creditList'])->name('creditList');
Route::get('transfer-list', [FinanceController::class, 'transferList'])->name('transferList');



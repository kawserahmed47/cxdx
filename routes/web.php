<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\ExchangeController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PaymentGatewayController;
use App\Http\Controllers\QuickExchangeController;
use App\Http\Controllers\QuickExchangerController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SocialLinkController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
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
Route::get('credit-details/{id}', [FinanceController::class, 'creditDetails'])->name('creditDetails');
Route::get('transfer-list', [FinanceController::class, 'transferList'])->name('transferList');

// Settings
Route::get('app-settings', [SettingsController::class, 'appSettings'])->name('appSettings');
Route::get('fees-settings', [SettingsController::class, 'feesSettings'])->name('feesSettings');
Route::get('commission-settings', [SettingsController::class, 'commissionSetup'])->name('commissionSetup');
Route::get('email-sms-settings', [SettingsController::class, 'emailSmsSettings'])->name('emailSmsSettings');
Route::get('email-gateway', [SettingsController::class, 'emailGateway'])->name('emailGateway');
Route::get('sms-gateway', [SettingsController::class, 'smsGateway'])->name('smsGateway');
Route::get('language-settings', [SettingsController::class, 'languageSettings'])->name('languageSettings');


// Exchange Settings
Route::get('exchange_list', [ExchangeController::class, 'exchangeList'])->name('exchangeList');
Route::get('crypto_currency', [ExchangeController::class, 'cryptoCurrency'])->name('cryptoCurrency');
Route::get('local-currency', [ExchangeController::class, 'localCurrency'])->name('localCurrency');
Route::get('exchange-wallet', [ExchangeController::class, 'exchangeWallet'])->name('exchangeWallet');
Route::get('exchange-wallet-info', [ExchangeController::class, 'exchangeWalletInfo'])->name('exchangeWalletInfo');

// Payment Gateway
Route::group(['prefix'=>'payment-gateway', 'as' =>'payment-gateway.'], function(){
    Route::get('gourl', [PaymentGatewayController::class, 'gourl'])->name('gourl');
    Route::get('payeer', [PaymentGatewayController::class, 'payeer'])->name('payeer');
    Route::get('paypal', [PaymentGatewayController::class, 'paypal'])->name('paypal');
    Route::get('paystack', [PaymentGatewayController::class, 'paystack'])->name('paystack');
    Route::get('phone', [PaymentGatewayController::class, 'phone'])->name('phone');
    Route::get('stripe', [PaymentGatewayController::class, 'stripe'])->name('stripe');
});

// Quick Exchanger
Route::group(['prefix'=>'quick-exchange', 'as' =>'quick-exchange.'], function(){
    Route::get('coin', [QuickExchangeController::class, 'exchangeCoin'])->name('exchangeCoin');
    Route::get('coin-form', [QuickExchangeController::class, 'exchangeCoinForm'])->name('exchangeCoinForm');
    Route::get('edit-coin-form/{id}', [QuickExchangeController::class, 'exchangeCoinFormEdit'])->name('exchangeCoinFormEdit');

    Route::get('fiat-currency', [QuickExchangeController::class, 'fiatCurrency'])->name('fiatCurrency');
    Route::get('request', [QuickExchangeController::class, 'exchangeRequest'])->name('exchangeRequest');
    Route::get('request-edit/{id}', [QuickExchangeController::class, 'exchangeRequestEdit'])->name('exchangeRequestEdit');
    Route::get('order', [QuickExchangeController::class, 'exchangeOrder'])->name('exchangeOrder');
    Route::get('documentation', [QuickExchangeController::class, 'documentation'])->name('documentation');
});

// CMS

Route::group(['prefix' => 'cms', 'as' => 'cms.'], function(){
    Route::resource('content', ContentController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('client',  ClientController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('testimonial', TestimonialController::class);
    Route::resource('faq', FaqController::class);
    Route::resource('news', NewsController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('slider', SliderController::class);
    Route::resource('social-link',SocialLinkController::class);
    Route::resource('advertisement', AdvertisementController::class);
    Route::resource('team', TeamController::class);
});

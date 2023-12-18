<?php

use App\Http\Controllers\Web\Auth\ForgotPassword\ForgotPasswordController;
use App\Http\Controllers\Web\Auth\SignIn\SignInController;
use App\Http\Controllers\Web\Auth\SignUp\SignUpController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Public Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'auth'], function () {
    Route::group(['prefix' => 'sign-in'], function () {
        Route::get('/', [SignInController::class, 'signInPage'])->name('web.auth.sign_in.sign_in_page');
    });

    Route::group(['prefix' => 'sign-up'], function () {
        Route::get('/', [SignUpController::class, 'signUpPage'])->name('web.auth.sign_up.sign_up_page');
    });

    Route::group(['prefix' => 'forgot-password'], function () {
        Route::get('/', [ForgotPasswordController::class, 'forgotPasswordPage'])->name('web.auth.forgot_password.forgot_password_page');
    });
});

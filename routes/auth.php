<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {

    // Buyers
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'showForgotForm'])
        ->name('forgot.password.form');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'sendResetLink'])
        ->name('forgot.password.link');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'showResetForm'])
        ->name('reset.password.form');

    Route::post('reset-password', [NewPasswordController::class, 'resetPassword'])
        ->name('reset.password');

    // Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
    //     ->name('password.reset');

    // Route::post('reset-password', [NewPasswordController::class, 'store'])
    //     ->name('password.update');



    // Route::match(['get', 'post'], 'password/reset/{token}', [NewPasswordController::class, 'showResetForm'])
    //     ->name('password.reset');

    // Route::match(['get', 'post'], 'reset-password', [NewPasswordController::class, 'store'])
    //     ->name('password.update');

    // Admin
    // Route::get('register/admin', [RegisteredAdminController::class, 'create'])
    //     ->name('registerAdmin');

    // Route::post('registerAdmin', [RegisteredAdminController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});
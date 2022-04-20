<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
// Admin
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AlamatController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\DetailController;

// Frontend
use App\Http\Controllers\Frontend\HomeController;
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

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Detail Product
Route::resource('product/detail', DetailController::class);

// Cart
Route::resource('cart', CartController::class);

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::name('dashboard.')->prefix('dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');
        // Route::resource('user', UserController::class)->only([
        //     'index', 'create', 'store', 'destroy', 'show',
        // ]);

        Route::resource('user', UserController::class);
        Route::resource('address', AlamatController::class);
        Route::resource('product', ProductController::class);
        Route::resource('transaction', TransactionController::class);
    });
});

// Route::get('/users', function () {
//     return view('pages.admin.user.index');
// })->middleware(['auth', 'verified'])->name('users');

require __DIR__ . '/auth.php';

<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', [HomeController::class, 'index'])->name('client.index');
Route::get('/san-pham', [HomeController::class, 'product'])->name('client.product');
// Route::get('/san-pham/{slug}', [HomeController::class, 'productShow']);
Route::get('/tin-tuc', [HomeController::class, 'news'])->name('client.news');
Route::get('/lien-he', [HomeController::class, 'contact'])->name('client.contact');
Route::get('/giai-phap', [HomeController::class, 'solution'])->name('client.solution');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/products', [ProductController::class, 'index'])->name('product');
    });
});

//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

require __DIR__ . '/auth.php';

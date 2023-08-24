<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
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

Route::get('/', [HomeController::class, 'index'])->name('client.index');
Route::get('/san-pham', [HomeController::class, 'product'])->name('client.product');
// Route::get('/san-pham/{slug}', [HomeController::class, 'productShow']);
Route::get('/tin-tuc', [HomeController::class, 'news'])->name('client.news');
Route::get('/lien-he', [HomeController::class, 'contact'])->name('client.contact');
Route::get('/giai-phap', [HomeController::class, 'solution'])->name('client.solution');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('', [DashboardController::class, 'index'])->name('dashboard');

        Route::get('products', [ProductController::class, 'index'])->name('product');
        Route::post('products', [ProductController::class, 'store'])->name('product.store');

        Route::get('news', [NewController::class, 'index'])->name('new');
        Route::get('blogs', [BlogController::class, 'index'])->name('blog');
        Route::get('contacts', [ContactController::class, 'index'])->name('contact');
    });
});

require __DIR__ . '/auth.php';

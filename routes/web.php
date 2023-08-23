<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('client.index');
Route::get('/san-pham', [HomeController::class, 'product'])->name('client.product');
// Route::get('/san-pham/{slug}', [HomeController::class, 'productShow']);
Route::get('/tin-tuc', [HomeController::class, 'news'])->name('client.news');
Route::get('/lien-he', [HomeController::class, 'contact'])->name('client.contact');
Route::get('/giai-phap', [HomeController::class, 'solution'])->name('client.solution');


use Inertia\Inertia;

Route::get('/auth/login', function () {
    return Inertia::render('Auth/Login');
})->name('login');

Route::post('/auth/login', [AuthController::class, 'login']);

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard/Index');
});

//Route::group(['middleware' => 'auth:sanctum'], function () {
//    Route::get('/dashboard', function () {
//        return Inertia::render('Dashboard');
//    });
//});


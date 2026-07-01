<?php

use App\Http\Controllers\AdminPanel\DashboardController;
use App\Http\Controllers\AdminPanel\LoginController;
use App\Http\Controllers\AdminPanel\ResepController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('/')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.store');

Route::prefix('/resep')->group(function () {
    Route::get('/', [ResepController::class, 'index'])->name('resep.index');
    Route::get('/create', [ResepController::class, 'showCreate'])->name('resep.create');
    Route::post('/', [ResepController::class, 'store'])->name('resep.store');
});

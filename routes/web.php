<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('category', [HomeController::class, 'category']);
Route::get('income', [HomeController::class, 'income']);
Route::get('expense', [HomeController::class, 'expense']);
Route::get('budget', [HomeController::class, 'budget']);
Route::get('report', [HomeController::class, 'report']);
Route::get('account', [HomeController::class, 'account']);
Route::get('security', [HomeController::class, 'security']);
Route::get('profile', [HomeController::class, 'profile']);
Route::get('bb-club', [HomeController::class, 'bb_club']);
Route::get('register', [HomeController::class, 'register']);
Route::get('login', [HomeController::class, 'login']);

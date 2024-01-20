<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SaveController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\UpdateController;

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
Route::group(['middleware'=>'loginauth'],function(){
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
    Route::get('category/status/{status}/{id}', [SaveController::class,'changeCategoryStatus']);
    // Save
    Route::post('save-category', [SaveController::class, 'saveCategory']);

    // Delete
    Route::get('delete-category', [DeleteController::class, 'deleteCategory']);

    // Update
    Route::post('update-category', [UpdateController::class, 'updateCategory']);
});


Route::get('register', [HomeController::class, 'register']);
Route::get('login', [HomeController::class, 'login']);
Route::get('logout', [HomeController::class, 'logout']);
Route::post('register', [SaveController::class, 'register']);
Route::post('login', [SaveController::class, 'login']);
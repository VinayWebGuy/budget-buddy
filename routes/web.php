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
    Route::post('save-income', [SaveController::class, 'saveIncome']);
    Route::post('save-expense', [SaveController::class, 'saveExpense']);
    Route::post('setup', [SaveController::class, 'setup']);

    // Delete
    Route::get('delete-category', [DeleteController::class, 'deleteCategory']);
    Route::get('delete-income', [DeleteController::class, 'deleteIncome']);
    Route::get('delete-expense', [DeleteController::class, 'deleteExpense']);

    // Update
    Route::post('update-category', [UpdateController::class, 'updateCategory']);
    Route::post('update-income', [UpdateController::class, 'updateIncome']);
    Route::post('update-expense', [UpdateController::class, 'updateExpense']);
    Route::post('update-budget', [UpdateController::class, 'updateBudget']);
});


Route::get('register', [HomeController::class, 'register']);
Route::get('login', [HomeController::class, 'login']);
Route::get('logout', [HomeController::class, 'logout']);
Route::post('register', [SaveController::class, 'register']);
Route::post('login', [SaveController::class, 'login']);
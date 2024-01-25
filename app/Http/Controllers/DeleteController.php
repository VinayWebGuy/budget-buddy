<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Income;
use App\Models\Expense;
use App\Models\Club;
use App\Models\Notification;

use Session;

use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function deleteCategory(Request $req) {
        $category = Category::find($req->id);
        if($category) {
            if($category->user_id == Session::get('user_id')){
                $category->delete();
                echo "deleted";
            }
            else {
                echo "error";
            }
        }
        else {
            echo "error";
        }
    }
    public function deleteIncome(Request $req) {
        $income = Income::find($req->id);
        if($income) {
            if($income->user_id == Session::get('user_id')){
                $income->delete();
                echo "deleted";
            }
            else {
                echo "error";
            }
        }
        else {
            echo "error";
        }
    }
    public function deleteExpense(Request $req) {
        $expense = Expense::find($req->id);
        if($expense) {
            if($expense->user_id == Session::get('user_id')){
                $expense->delete();
                echo "deleted";
            }
            else {
                echo "error";
            }
        }
        else {
            echo "error";
        }
    }
    public function deleteClubEntry(Request $req) {
        $club = Club::find($req->id);
        if($club) {
            if($club->user_id == Session::get('user_id')){
                $club->delete();
                echo "deleted";
            }
            else {
                echo "error";
            }
        }
        else {
            echo "error";
        }
    }
}

<?php

namespace App\Http\Controllers;
use Str;

use App\Models\Category;
use App\Models\User;
use App\Models\Income;
use App\Models\Expense;
use Session;

use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function updateCategory(Request $req) {
        $check = Category::where('name', $req->name)->where('user_id', Session::get('user_id'))->where('id', '!=', $req->id)->first();
        if(!$check) {;
            $category = Category::find($req->id);
            $category->name = $req->name;
            $category->slug = Str::slug($req->name);
            $category->save();
            echo "success";
        }
        else {
            echo "duplicate";
        }
    }
    public function updateIncome(Request $req) {
        $income = Income::find($req->id);
        $income->amount = $req->amount;
        $income->category = $req->category;
        $income->date = $req->date;
        $income->method = $req->method;
        $income->remarks = $req->remarks;
        $income->save();
        echo "success";
    }
    public function updateExpense(Request $req) {
        $expense = Expense::find($req->id);
        $expense->amount = $req->amount;
        $expense->category = $req->category;
        $expense->date = $req->date;
        $expense->method = $req->method;
        $expense->remarks = $req->remarks;
        $expense->save();
        echo "success";
    }
    public function updateBudget(Request $req) {
        $user = User::find(Session::get('user_id'));
        $user->monthly_budget = $req->budget;
        $user->save();
        echo "success";
    }
}

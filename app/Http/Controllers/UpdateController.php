<?php

namespace App\Http\Controllers;
use Str;
use App\Models\Category;
use App\Models\User;
use App\Models\Income;
use App\Models\Expense;
use App\Models\Club;
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
    public function updateAccount(Request $req) {
        $user = User::find(Session::get('user_id'));
        $user->monthly_budget = $req->monthly_budget;
        $user->currency = $req->currency;
        $user->save();
        echo "success";
    }
    public function updateSecurity(Request $req) {
        $user = User::find(Session::get('user_id'));
        $user->multiple_login = $req->multiple_login;
        $user->notifications = $req->notifications;
        $user->save();
        echo "success";
    }
   public function updatePassword(Request $req){
        $user = User::find(Session::get('user_id'));
        if($user->pwd == md5($req->old_password)) {
            $user->pwd = md5($req->new_password);
            $user->save();
            echo "success";
        }
        else {
            echo "mismatch";
        }
   }
   public function updateProfile(Request $req) {
        $user = User::find(Session::get('user_id'));
        // Check Mobile
        $duplicate = false;
        $allUsers = User::where('id', '!=', Session::get('user_id'))->get();
        foreach ($allUsers as $sUser) {
           if($sUser->mobile == $req->mobile) {
                $duplicate = true;
           }
        }
        if(!$duplicate) {
            $user->name = $req->name;
            $user->mobile = $req->mobile;
            $user->save();
            echo "success";
        }
        else {
            echo "duplicate";
        }
   }
   public function deactivateAccount(Request $req) {
        $user = User::find(Session::get('user_id'));
        if($user->pwd == md5($req->password)) {
            $user->status = 0;
            $user->save();
            Session::forget('user_id');
            Session::forget('name');
            Session::forget('email');
            Session::forget('mobile');
            Session::forget('session_id');
            echo "success";
        }
        else {
            echo "invalid";
        }
   }
   public function updateClubEntry(Request $req) {
        $club = Club::find($req->id);
        $club->date = $req->date;
        $club->amount = $req->amount;
        $club->payment_type = $req->payment_type;
        $club->remarks = $req->remarks;
        $club->save();
        echo "success";
   }
}
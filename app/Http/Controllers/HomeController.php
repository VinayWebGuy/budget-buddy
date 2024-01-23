<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Income;
use App\Models\Expense;
use App\Models\User;
use App\Models\Club;
use Session;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function register() {
        return view('register');
    }
    public function login() {
        return view('login');
    }
    public function index() {
        $sumExpense = Expense::where('user_id', Session::get('user_id'))
            ->whereMonth('date', now()->month)
            ->whereYear('date', now()->year)
            ->sum('amount');
        $sumIncome = Income::where('user_id', Session::get('user_id'))
            ->whereMonth('date', now()->month)
            ->whereYear('date', now()->year)
            ->sum('amount');
        $income = Income::where('user_id', Session::get('user_id'))->orderBy('date', 'desc')->limit(5)->get();
        $expense = Expense::where('user_id', Session::get('user_id'))->orderBy('date', 'desc')->limit(5)->get();
        $user = User::find(Session::get('user_id'));
        return view('index', compact('sumExpense', 'sumIncome', 'income', 'expense', 'user'));
    }
    public function category() {
        $category = Category::where('user_id', Session::get('user_id'))->orderBy('name', 'asc')->paginate(10);
        return view('category', compact('category'));
    }
    public function income() {
        $category = Category::where('user_id', Session::get('user_id'))->where('status', 1)->orderBy('name', 'asc')->get();
        $income = Income::where('user_id', Session::get('user_id'))->orderBy('date', 'desc')->paginate(10);
        $user = User::find(Session::get('user_id'));
        return view('income', compact('category', 'income', 'user'));
    }
    public function expense() {
        $category = Category::where('user_id', Session::get('user_id'))->where('status', 1)->orderBy('name', 'asc')->get();
        $expense = Expense::where('user_id', Session::get('user_id'))->orderBy('date', 'desc')->paginate(10);
        $user = User::find(Session::get('user_id'));
        return view('expense', compact('category', 'expense', 'user'));
    }
    public function budget() {
        $sumExpense = Expense::where('user_id', Session::get('user_id'))
                    ->whereMonth('date', now()->month)
                    ->whereYear('date', now()->year)
                    ->sum('amount');
        $sumIncome = Income::where('user_id', Session::get('user_id'))
                    ->whereMonth('date', now()->month)
                    ->whereYear('date', now()->year)
                    ->sum('amount');
        $user = User::find(Session::get('user_id'));
        return view('budget', compact('sumExpense', 'sumIncome', 'user'));
    }
    public function report() {
        return view('report');
    }
    public function account() {
        $user = User::find(Session::get('user_id'));
        return view('account', compact('user'));
    }
    public function security() {
        $user = User::find(Session::get('user_id'));
        return view('security', compact('user'));
    }
    public function profile() {
        $user = User::find(Session::get('user_id'));
        return view('profile', compact('user'));
    }
    public function bb_club() {
        $club = Club::where('user_id', Session::get('user_id'))->orderBy('date', 'desc')->paginate(10);
        return view('bb_club', compact('club'));
    }
    public function logout() {
        Session::forget('user_id');
        Session::forget('name');
        Session::forget('email');
        Session::forget('mobile');
        Session::forget('session_id');
        return redirect('login');
    }
}

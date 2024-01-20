<?php

namespace App\Http\Controllers;

use App\Models\Category;

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
        return view('index');
    }
    public function category() {
        
        $category = Category::where('user_id', Session::get('user_id'))->orderBy('name', 'asc')->paginate(10);
        return view('category', compact('category'));
    }
    public function income() {
        return view('income');
    }
    public function expense() {
        return view('expense');
    }
    public function budget() {
        return view('budget');
    }
    public function report() {
        return view('report');
    }
    public function account() {
        return view('account');
    }
    public function security() {
        return view('security');
    }
    public function profile() {
        return view('profile');
    }
    public function bb_club() {
        return view('bb_club');
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

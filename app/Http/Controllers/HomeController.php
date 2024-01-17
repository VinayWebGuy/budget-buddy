<?php

namespace App\Http\Controllers;

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
        return view('category');
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
    public function wallet() {
        return view('wallet');
    }
}

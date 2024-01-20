<?php

namespace App\Http\Controllers;
use Str;

use App\Models\Category;
use App\Models\User;
use Session;

use Illuminate\Http\Request;

class SaveController extends Controller
{

    public function register(Request $req) {
        $req->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'mobile' => 'required|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
        ]);

        $user = new User;
        $user->name = $req->name;
        $user->uid = Str::random(13)."-".md5($req->email);
        $user->email = $req->email;
        $user->mobile = $req->mobile;
        $user->pwd = md5($req->password);
        $user->save();
        session()->flash('success', 'Account created successfully! Kindly confirm your account by click on the link received on your email.');
        return redirect()->back();

    }

    public function login(Request $req) {
        $req->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = User::where('email', $req->email)->where('pwd', md5($req->password))->first();
        if($user) {
            if($user->is_verified == 1) {
                if($user->status == 1) {
                    $session_id = Str::random(10);
                    Session::put('user_id', $user->id);
                    Session::put('name', $user->name);
                    Session::put('email', $user->email);
                    Session::put('mobile', $user->mobile);
                    Session::put('session_id', $session_id);
                    $user->session_id = $session_id;
                    $user->save();

                    return redirect('/');
                }
                else {
                    session()->flash('error', 'Account banned! Your account has been banned due to some unsuspicious activities.');
                    return redirect()->back();
                }
            }
            else {
                session()->flash('error', 'Account not verified! Kindly verify your account by click the link received on your email');
                return redirect()->back();
            }
        }
        else {
            session()->flash('error', 'Invalid details! Please provide correct email and password.');
            return redirect()->back();
        }
    }

    public function saveCategory(Request $req) {
        $check = Category::where('name', $req->name)->where('user_id', Session::get('user_id'))->first();
        if(!$check) {;
            $category = new Category;
            $category->user_id = Session::get('user_id');
            $category->name = $req->name;
            $category->slug = Str::slug($req->name);
            $category->save();
            echo "success";
        }
        else {
            echo "duplicate";
        }
    }
    public function changeCategoryStatus($status, $id) {
        $category = Category::where('id',$id)->where('user_id', Session::get('user_id'))->first();
        $category->status = $status;
        $category->save();
        return redirect()->back();
    }
}
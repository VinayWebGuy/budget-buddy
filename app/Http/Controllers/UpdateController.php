<?php

namespace App\Http\Controllers;
use Str;

use App\Models\Category;
use App\Models\User;
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
}

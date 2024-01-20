<?php

namespace App\Http\Controllers;

use App\Models\Category;

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
}

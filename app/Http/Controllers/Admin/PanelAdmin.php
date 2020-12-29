<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Category;
use App\Product;
use App\User;

class PanelAdmin extends Controller
{
    public function index(){

        if(Auth::check()){
            if(Auth::user()->role == 'Administrador'){
                $categories_number = Category::all()->count();
                $products_number = Product::all()->count();
                $users_number = Product::all()->count();

                return view('admin.index', compact('categories_number', 'products_number', 'users_number'));
            }else{
                return redirect(route('index'));
            }
        }else{
            return redirect(route('index'));
        }

    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Category;

class PanelAdmin extends Controller
{
    public function index(){

        if(Auth::check()){
            if(Auth::user()->role == 'Administrador'){
                $categories_number = Category::all()->count();
                return view('admin.index', compact('categories_number'));
            }else{
                return redirect(route('index'));
            }
        }else{
            return redirect(route('index'));
        }

    }
}

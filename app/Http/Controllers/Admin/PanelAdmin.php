<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Category;
use App\Product;
use App\User;
use App\Order;

class PanelAdmin extends Controller
{
    public function index(){

        if(Auth::check()){
            if(Auth::user()->role == 'Administrador'){
                $enero = Order::where('created_at', 'LIKE', "%2021-01%")->get()->count();
                $febrero = Order::where('created_at', 'LIKE', "%2021-02%")->get()->count();
                $marzo = Order::where('created_at', 'LIKE', "%2021-03%")->get()->count();
                $abril = Order::where('created_at', 'LIKE', "%2021-04%")->get()->count();
                $mayo = Order::where('created_at', 'LIKE', "%2021-05%")->get()->count();
                $junio = Order::where('created_at', 'LIKE', "%2021-06%")->get()->count();
                $julio = Order::where('created_at', 'LIKE', "%2021-07%")->get()->count();
                $agosto = Order::where('created_at', 'LIKE', "%2021-08%")->get()->count();
                $septiembre = Order::where('created_at', 'LIKE', "%2021-09%")->get()->count();
                $octubre = Order::where('created_at', 'LIKE', "%2021-10%")->get()->count();
                $noviembre = Order::where('created_at', 'LIKE', "%2021-11%")->get()->count();
                $diciembre = Order::where('created_at', 'LIKE', "%2021-12%")->get()->count();

                $categories_number = Category::all()->count();
                $products_number = Product::all()->count();
                $users_number = User::all()->count();

                return view('admin.index', compact('categories_number', 'products_number', 'users_number','enero', 'febrero', 'marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre'));
            }else{
                return redirect(route('index'));
            }
        }else{
            return redirect(route('index'));
        }

    }
}

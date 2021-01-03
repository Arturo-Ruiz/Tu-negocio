<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Product;

class IndexController extends Controller
{
    public function index(){
        $categories = Category::where('index', '1')->get();
        $categories_all = [];
        $products_all = [];
        foreach ($categories as $key) {
            $id = $key->id;
            $name = $key->name;
            array_push ( $categories_all , $name );


            //VARIABLESDINAMICASPHP
            ${"products" . $id} = Product::where('category_id', $key->id)->get();
            array_push ( $products_all , ${"products" . $id} );
        };

        return view('web.index', compact('products_all', 'categories_all'));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::All();
        $categories = Category::All();
        return view('admin.products.index', compact('products','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $file  =  $request->img;
        $nombre = rand(1, 99999999999999).$file->getClientOriginalName();
        $ruta = storage_path().'\app\public\imagenes/'. $nombre;
        Image::make($file)->save($ruta);
        $url = 'storage/imagenes/' . $nombre;


        $product = new Product;

        $product->name  =  $request->name;
        $product->description  =  $request->description;
        $product->price  =  $request->price;
        $product->img  = $url;
        $product->category_id   =  $request->category_id;

        $product->save();

        return redirect()->route('Products.index')->with('info', 'Guardado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prouct = Product::find($id)->delete();
        return redirect()->route('Products.index')->with('danger', 'Eliminado Correctamente');
    }
}

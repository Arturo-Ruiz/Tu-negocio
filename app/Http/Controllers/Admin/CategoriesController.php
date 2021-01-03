<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use Auth;


class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            if(Auth::user()->role == 'Administrador'){
                $categories = Category::all();
                return view('admin.categories.index', compact('categories'));
            }else{
                return redirect(route('index'));
            }
        }else{
            return redirect(route('index'));
        }
    }

    public function store(Request $request)
    {
        $categories_number = Category::where('index', '1')->count();
        if($request->index === '1'){
            if($categories_number === 3 ){
                return back()->with('danger', 'Solamente pueden existir 3 categorias en el inicio');
            }
        }
        $category = new Category;
        $category->name  =  $request->name;
        $category->index  =  $request->index;
        $category->save();

        return back()->with('info', 'Guardado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id)->delete();
        return back()->with('danger', 'Eliminado Correctamente');
    }
}

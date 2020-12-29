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
        $category = Category::create($request->all());
        return back();
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
        return back();
    }
}

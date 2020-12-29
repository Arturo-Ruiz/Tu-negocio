<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class PanelAdmin extends Controller
{
    public function index(){

        if(Auth::check()){
            
        }else{
            return redirect(route('index'));
        }

    }
}

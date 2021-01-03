<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginFrontController extends Controller
{
    public function index(){
        return view('web.login');
    }
}

<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function index(Request $request){

        $productos = $request->productos;
        if($productos === "[]"){
            return redirect()->route('index')->with('danger', 'No puede realizar un pedido sin productos');
        }
        if($productos === null){
            return redirect()->route('index')->with('danger', 'No puede realizar un pedido sin productos');
        }

        $order = new Order;
        $order->name  =  $request->name;
        $order->email  =  $request->email;
        $order->phone  =  $request->phone;
        $order->products  =  $request->productos;
        $order->status  =  '1';
        $order->total =  $request->total_venta;

        $order->save();

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $products = $request->productos;
        $total =  $request->total_venta;




        return view('web.whatsapp', compact('name', 'email', 'phone', 'products', 'total'));


    }

}

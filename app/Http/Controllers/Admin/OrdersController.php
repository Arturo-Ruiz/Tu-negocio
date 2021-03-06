<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use Auth;

class OrdersController extends Controller
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
                $orders = Order::all();
                return view('admin.orders.index', compact('orders'));
            }else{
                return redirect(route('index'));
            }
        }else{
            return redirect(route('index'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $order = Order::find($id)->delete();
        return redirect()->route('Orders.index')->with('danger', 'Eliminado Correctamente');
    }

    public function Aprobar($id)
    {
        $order = Order::find($id);
        $order->status  = '2';
        $order->save();

        return redirect()->route('Orders.index')->with('info', 'Estatus del pedido actualizado correctamente');
    }
    public function Cancelar($id)
    {
        $order = Order::find($id);
        $order->status  = '3';
        $order->save();

        return redirect()->route('Orders.index')->with('info', 'Estatus del pedido actualizado correctamente');
    }
}

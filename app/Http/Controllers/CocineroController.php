<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\DetallePedido;
use App\Events\PedidoTerminado;
use Illuminate\Support\Facades\Log;

class CocineroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /*$pedidos = Pedido::with(['detallePedido'=>function ($query){
            $query->where('estadoPedido','=',1);
        }])->get();*/
        $pedidos = Pedido::where('estadoPedido','=',1)->with('detallePedido.dishes')->get();
        //dd($pedidos);
        return view('cocineroView.index',compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function platilloTerminado(Request $request, string $id){
        $request->validate([
            'estadoPedido'=>'required|integer|in:0'
        ]);
        try {
            
            $pedido = Pedido::findOrFail($id);
            $pedido->estadoPedido = $request->estadoPedido;
            $pedido->save();

            broadcast(new PedidoTerminado($pedido))->toOthers();
            return response()->json(['message' => 'Pedido actualizado y notificado'], 200);
            
            /*$affectedRows = Pedido::where('idPedido','=',$id)->update([
                'estadoPedido'=> $request->estadoPedido
            ]);

            if($affectedRows>0){
                //Esto dispara el evento
                broadcast(new PedidoTerminado($pedido))->toOthers();
                return response()->json(['message'=>'Pedido actualizado con éxito'],200);
            }

            return response()->json(['message'=>'El pedido no fue encontrado o ya estaba actualizado'],404);*/
        } catch (\Throwable $th) {
            Log::error('ERROR PLATILLO'. $th);
            return response()->json(['message'=>'Ocurrio un error inesperado al actualizar'],500);
        }
        
    }
}

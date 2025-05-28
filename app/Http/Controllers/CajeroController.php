<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\DetallePedido;
use App\Models\Mesa;
use App\Models\Pago;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class CajeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Forma elegante
        $pedidos = Pedido::with('mesa')->doesntHave('pago')->get();
        return view('cajeroView.index',compact('pedidos'));
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


    public function facturar(Request $request){
        $detallePedido = Pedido::with('detallePedido')
                ->where('idPedido', $request->idPedido)
                ->first();
        return response()->json($detallePedido);
    }

    public function pagarPedido(Request $request){
        /*
        use Illuminate\Support\Facades\Log;
        Log::info('Datos recibidos en pagarPedido:', $request->all());
        */
        $request->validate([
            'idPedido' => 'required|integer|exists:pedido,idPedido',
            'montoAPagar' => 'required|numeric',
            'idTipoPago' => 'required|integer'
        ]);
    
        $pago = new Pago();
        $pago->idPedido = $request->idPedido;
        $pago->montoAPagar = $request->montoAPagar;
        $pago->fechaPago = now();
        $pago->idTipoPago = $request->idTipoPago;
        $pago->save();
    
        return response()->json(['message' => 'Pago registrado correctamente']);
    }


    public function orderHistory(){
        return view('cajeroView.orderHistory');
    }



    public function getHistory(){
        $orderHistory = Pedido::with('detallePedido')
                        ->whereDate('fechaPedido','2025-04-27')
                        //->whereDate('fechaPedido',Carbon::today())
                        ->get();
        //dd($orderHistory);
        return $orderHistory;
    }
}

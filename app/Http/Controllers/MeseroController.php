<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Dishes;
use App\Models\Pedido;
use App\Models\Mesa;
use App\Models\Category;
use App\Models\DetallePedido;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class MeseroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dishes = Dishes::where('status',1)->get();
        //Get only categories
        $categories = Category::whereHas('dishes', function($query){
            $query->where('status',1);
        })->get();

        $mesas = Mesa::all();

        //Get every category with his active dish
        /*$categories = Category::whereHas('dishes',function($query){
            $query->where('status',1);
        })->with(['dishes'=>function($query){
            $query->where('status',1);
        }])->get();*/
        
        return view('mozoView.index', compact('dishes','categories','mesas'));
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

    //DO ORDER
    public function makeOrder(Request $request){
        //Get orders
        $orders = $request->json()->all();
        $data = $orders['data'];
        //Get start the transaction
        try {
            DB::beginTransaction();

            $user = session()->get('user_id');
            if(!$user){
                throw new \Exception("User not authenticated");
            }

            //Create PEDIDO
            $pedido = new Pedido();

            $pedido->fechaPedido = Carbon::now()->toDateTimeString();
            $pedido->details = $orders['detalles'];
            $pedido->idMesa =  $orders['mesa'];
            $pedido->idEmployee = $user;
            $pedido->save();

            //Create DetallePedido
            foreach($data as $dishId=>$dishData){
                $item = new DetallePedido();
                $item->idPedido = $pedido->idPedido;
                $item->idDishes = $dishId;
                $item->price = $dishData['price'];
                $item->quantity = $dishData['quantity'];
                $item->save();
            }
            
            DB::commit();

            return response()->json([
                'message' => 'Order received successfully'
            ]);

        } catch (\Exception $e) {
            DB::rollBack();

            \Log::error('Order creation failed: '. $e->getMessage());

            return response()->json([
                'message' => 'Order Failed',
                'error' => $e->getMessage()
            ],500);
        }
    }

    public function filterByCategory(Request $request){
        $idCategory = $request->json()->all();

        $categories = Dishes::where('idCategory',$idCategory);

        
        return response()->json([
            'message'=>'Success'
        ]);
    }

}

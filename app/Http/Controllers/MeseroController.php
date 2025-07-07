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

use Illuminate\Support\Facades\Http;


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

    // public function responder(Request $request)
    // {
    //     $pregunta = $request->input('pregunta');

    //     try {
    //         // Llamada a Ollama con el modelo deepseek-r1:8b
    //         $response = Http::post('http://localhost:11434/api/generate', [
    //             'model' => 'deepseek-r1:8b',
    //             'prompt' => $pregunta,
    //             'stream' => false
    //         ]);

    //         if ($response->successful()) {
    //             $respuestaRaw = $response->json()['response'];

    //             // 🔴 Eliminar contenido entre <think>...</think>
    //             $sinThink = preg_replace('/<think>.*?<\/think>/s', '', $respuestaRaw);
    //             // 🔴 Eliminar etiquetas tipo <|...|> si las hubiera
    //             $limpio = preg_replace('/<\|.*?\|>/', '', $sinThink);
    //             // 🔴 Limpiar espacios al inicio y final
    //             $respuesta = trim($limpio);

    //             return response()->json(['respuesta' => $respuesta]);
    //         } else {
    //             return response()->json(['respuesta' => 'Error al generar respuesta desde Ollama.'], 500);
    //         }
    //     } catch (\Exception $e) {
    //         return response()->json(['respuesta' => 'Error al conectarse con Ollama: ' . $e->getMessage()], 500);
    //     }
    // }


    public function responder(Request $request)
    {

        $pregunta = $request->pregunta;
        $apiKey = env('GEMINI_API_KEY');

        $platillos = Dishes::select('dishName', 'price')->get();
        $listaPlatos = $platillos->map(function ($p) {
            return "{$p->dishName} (\${$p->price})";
        })->implode(', ');

        $prompt = "Tomando en cuenta estos platos: $listaPlatos. Quiero que me digas: $pregunta";

        try {
            $response = Http::timeout(120)
                ->withHeaders([
                    'Content-Type' => 'application/json'
                ])
                ->post("https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key={$apiKey}", [
                    'contents' => [
                        [
                            'parts' => [
                                ['text' => $prompt]
                            ]
                        ]
                    ]
                ]);

            if ($response->successful()) {
                $data = $response->json();
                $respuesta = $data['candidates'][0]['content']['parts'][0]['text'] ?? 'No hay respuesta.';
                return response()->json(['respuesta' => $respuesta]);
            } else {
                return response()->json(['respuesta' => 'Error al contactar la API de Gemini.'], 500);
            }
        } catch (\Exception $e) {
            return response()->json(['respuesta' => 'Error: ' . $e->getMessage()], 500);
        }
    }

}

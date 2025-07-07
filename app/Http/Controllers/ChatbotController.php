<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dishes;
use OpenAI\Laravel\Facades\OpenAI;

class ChatbotController extends Controller
{
    public function responder(Request $request)
    {
        $request->validate(['pregunta' => 'required|string|max:400']);
        $preguntaUsuario = $request->input('pregunta');

        $platos = Dishes::all();

        $menu = "Este es el menú disponible:\n";
        foreach ($platos as $plato) {
            $menu .= "- Nombre: {$plato->dishName}, Descripción: {$plato->dishDescription}, Precio: {$plato->price}\n";
        }

        $prompt = <<<PROMPT
        Eres un asistente virtual de un restaurante llamado "Redondos". Tu única función es recomendar platos del menú a los clientes.
        Debes ser amable y servicial. No hables de nada que no sea la comida del restaurante.
        Basándote únicamente en el menú de arriba, responde la siguiente pregunta del cliente. Si el cliente pide algo que no está en el menú o no se puede deducir de él, dile amablemente que no tienes suficiente información para esa solicitud, pero puedes recomendarle otra cosa.
        PROMPT;
        $messages = [
            ['role'=>'system','content'=>$prompt],
            ['role'=>'system','content'=>"Menú disponible:\n{$menu}"],
            ['role'=>'user'  ,'content'=>$preguntaUsuario],
        ];
        try {
            $response =OpenAI::chat()->create([
                'model' => config('openai.azure.deployment'),
                'messages' => $messages,
            ]);

            $respuestaAI = $response->choices[0]->message->content;
            return response()->json(['respuesta' => $respuestaAI]);

        } catch (\Exception $e) {
            \Log::error("Error con la API de OpenAI: " . $e->getMessage());
            return response()->json(['respuesta' => 'Lo siento, estoy teniendo problemas para conectarme con el asistente. Inténtalo más tarde.'], 500);
        }
    }
}

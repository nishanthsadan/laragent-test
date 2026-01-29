<?php

namespace App\Http\Controllers;

use App\AiAgents\EduHelperAgent;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function chat(Request $request)
    {
        $message = $request->input('message');

        $chatKey = session()->getId();

        $agent = new EduHelperAgent($chatKey);

        $response = $agent->respond($message);



        return response()->json([
            'reply' => $response
        ]);
    }
}

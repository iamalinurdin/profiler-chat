<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use Exception;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function send(Request $request)
    {
        try {
            Chat::create([
                'sender_id' => $request->post('sender_id'),
                'body' => $request->post('body')
            ]);

            return response()->json([
                'message' => 'success'
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function markAsRead($id)
    {
        $chat = Chat::find($id);
        $chat->is_read = true;
        $chat->save();

        return response()->json([
            'message' => 'success'
        ], 200);
    }
}

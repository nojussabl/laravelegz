<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Server;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(Server $server)
    {
        $messages = $server->messages()->with('user')->get();
        return view('chat', compact('server', 'messages'));
    }

    public function store(Request $request, Server $server)
    {
        $request->validate(['message' => 'required|string']);
        $server->messages()->create([
            'user_id' => auth()->id(),
            'message' => $request->message,
        ]);
        return redirect()->route('server.show', $server->id);
    }
}
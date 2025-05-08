<?php

namespace App\Http\Controllers;

use App\Models\Server;
use Illuminate\Http\Request;

class ServersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $servers = Server::paginate(5);
        $addedServers = auth()->user()->servers->pluck('id');
        return view('servers', compact('servers', 'addedServers'));
    }

    public function add(Server $server)
    {
        auth()->user()->servers()->attach($server->id);
        return redirect()->route('servers');
    }
}

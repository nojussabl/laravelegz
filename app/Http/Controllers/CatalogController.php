<?php

namespace App\Http\Controllers;

use App\Models\Server;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $search = $request->input('search');
        $servers = auth()->user()->servers()
            ->when($search, fn($query) => $query->where('name', 'like', "%$search%"))
            ->get();
        return view('catalog', compact('servers'));
    }

    public function pdf()
    {
        $servers = auth()->user()->servers;
        $pdf = Pdf::loadView('pdf.servers', compact('servers'));
        return $pdf->download('servers.pdf');
    }
}

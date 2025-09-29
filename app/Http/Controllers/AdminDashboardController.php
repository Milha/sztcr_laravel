<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Poruka;
use App\Models\PonudaDobavljaca;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $totalPoruka = Poruka::count();
        $totalPonuda = PonudaDobavljaca::count();
        $poslednjePoruke = Poruka::latest()->take(5)->get();
        $poslednjePonude = PonudaDobavljaca::latest()->take(5)->get();

        return view('administrator.admin', compact(
            'totalPoruka',
            'totalPonuda',
            'poslednjePoruke',
            'poslednjePonude'
        ));
    }
}

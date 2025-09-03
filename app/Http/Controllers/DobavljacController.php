<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Dobavljac;


class DobavljacController extends Controller
{
    public function index()
    {
        $dobavljaci = Dobavljac::all();
        return view('dobavljaci.index', compact('dobavljaci'));
    }

    public function create()
    {
        return view('dobavljaci.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'naziv' => 'required|string|max:255',
            'kontakt' => 'required|string|max:255',
        ]);

        Dobavljac::create($request->all());

        return redirect()->route('dobavljaci.index')
            ->with('success', 'Dobavljač je uspešno kreiran.');
    }


    public function show(Dobavljac $dobavljac)
    {
        // dd($dobavljac);
        return view('dobavljaci.show', ['dobavljac' => $dobavljac]);
    }

    public function edit(Dobavljac $dobavljac)
    {
        return view('dobavljaci.edit', compact('dobavljac'));
    }

    public function update(Request $request, Dobavljac $dobavljac)
    {
        $request->validate([
            'naziv' => 'required|string|max:255',
            'kontakt' => 'required|string|max:255',
        ]);

        $dobavljac->update($request->all());

        return redirect()->route('dobavljaci.index')
            ->with('success', 'Dobavljač je uspešno ažuriran.');
    }

    public function destroy(Dobavljac $dobavljac)
    {
        $dobavljac->delete();

        return redirect()->route('dobavljaci.index')
            ->with('success', 'Dobavljač je uspešno obrisan.');
    }
}

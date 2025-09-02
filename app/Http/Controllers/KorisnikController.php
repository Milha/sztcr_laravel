<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class KorisnikController extends Controller
{

    public function index()
    {
        $korisnici = User::all();
        return view('korisnici.index', compact('korisnici'));
    }


    public function create()
    {
        return view('korisnici.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ime' => 'required|string|max:255',
            'prezime' => 'required|string|max:255',
            'email' => 'required|string|max:255',
        ]);

        User::create($request->all());

        return redirect()->route('korisnici.index')
            ->with('success', 'Korisnik je uspešno kreiran.');
    }


    public function show(User $korisnik)
    {
        // dd($korisnik);
        return view('korisnici.show', ['korisnik' => $korisnik]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $korisnik)
    {
        return view('korisnici.edit', compact('korisnik'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $korisnik)
    {
        $request->validate([
            'ime' => 'required|string|max:255',
            'prezime' => 'required|string|max:255',
        ]);

        $korisnik->update($request->all());

        return redirect()->route('korisnici.index')
            ->with('success', 'Dobavljač je uspešno ažuriran.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

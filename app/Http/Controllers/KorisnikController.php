<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class KorisnikController extends Controller
{

    public function index()
    {
        $korisnici = User::paginate(5);
        return view('korisnici.index', compact('korisnici'));
    }

    public function create()
    {
        return view('korisnici.create');
    }

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
        return view('korisnici.show', ['korisnik' => $korisnik]);
    }

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

    public function destroy(User $korisnik)
    {
        $korisnik->delete();

        return redirect()->route('korisnici.index')
            ->with('success', 'Korisnik je uspešno obrisan.');
    }
}

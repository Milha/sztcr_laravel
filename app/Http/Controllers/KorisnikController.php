<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class KorisnikController extends Controller
{

    public function index(Request $request)
    {
        $query = User::query();

        if ($request->filled('search')) {
            $query->where('ime', 'like', '%' . $request->search . '%');
        }

        $korisnici = $query->orderBy('ime')->paginate(10)->withQueryString();

        return view('korisnici.index', compact('korisnici'));
        // $korisnici = User::paginate(10);
        // return view('korisnici.index', compact('korisnici'));
    }

    public function create()
    {
        return view('korisnici.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'ime' => 'required|string|max:255',
            'prezime' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
            'role' => 'required|in:dobavljac,user,radnik',
        ]);

        User::create([
            'ime' => $validated['ime'],
            'prezime' => $validated['prezime'],
            'email' => $validated['email'],
            'password' => $validated['password'],
            'role' => $validated['role'],
        ]);

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

    public function update(Request $request, User $korisnik)
    {
        $validated = $request->validate([
            'ime' => 'required|string|max:255',
            'prezime' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $korisnik->id,
            'role' => 'required|in:dobavljac,user,radnik',
            'password' => 'nullable|string|min:8',
        ]);

        $korisnik->update([
            'ime' => $validated['ime'],
            'prezime' => $validated['prezime'],
            'email' => $validated['email'],
            'role' => $validated['role'],
            'password' => $validated['password'] ?? $korisnik->password,
        ]);

        return redirect()->route('korisnici.index')
            ->with('success', 'Korisnik je uspešno ažuriran.');
    }

    public function destroy(User $korisnik)
    {
        $korisnik->delete();

        return redirect()->route('korisnici.index')
            ->with('success', 'Korisnik je uspešno obrisan.');
    }
}

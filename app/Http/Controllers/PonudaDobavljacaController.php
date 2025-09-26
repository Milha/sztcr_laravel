<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PonudaDobavljaca;

class PonudaDobavljacaController extends Controller
{
    // public function index()
    // {
    //     $ponude = PonudaDobavljaca::paginate(3);

    //     return view('ponude_dobavljaca.index', [
    //         'ponude' => $ponude
    //     ]);
    // }

    public function index(Request $request)
    {
        $query = PonudaDobavljaca::query();

        if ($request->filled('search')) {
            $query->where('nazivProizvoda', 'like', '%' . $request->search . '%');
        }

        $ponude = $query->orderBy('brojPonude')->paginate(3)->withQueryString();

        return view('ponude_dobavljaca.index', compact('ponude'));
    }


    public function create()
    {
        return view('ponude_dobavljaca.create');
    }

    public function store()
    {
        PonudaDobavljaca::create([
            'brojPonude' => request('brojPonude'),
            'nazivProizvoda' => request('nazivProizvoda'),
            'kolicina' => request('kolicina'),
            'cena' => request('cena'),
            'dobavljac_id' => request('dobavljac_id'),
        ]);

        return redirect()->route('ponude_dobavljaca.index')->with('success', 'Ponuda uspesno kreirana.');
    }

    public function show(PonudaDobavljaca $ponuda)
    {
        return view('ponude_dobavljaca.show', ['ponuda' => $ponuda]);
    }

    public function edit(PonudaDobavljaca $ponuda)
    {
        return view('ponude_dobavljaca.edit', ['ponuda' => $ponuda]);
    }

    public function update(PonudaDobavljaca $ponuda)
    {
        // dd($ponuda);
        $ponuda->update([
            'brojPonude' => request('brojPonude'),
            'nazivProizvoda' => request('nazivProizvoda'),
            'kolicina' => request('kolicina'),
            'cena' => request('cena'),
            'dobavljac_id' => request('dobavljac_id')
        ]);

        return redirect('/ponude_dobavljaca/' . $ponuda->id);
    }

    public function destroy(PonudaDobavljaca $ponuda)
    {
        $ponuda->delete();

        return redirect('/ponude_dobavljaca');
    }
}

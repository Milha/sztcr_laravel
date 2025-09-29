<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PonudaDobavljaca;
use App\Models\Dobavljac;

class PonudaDobavljacaController extends Controller
{

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
        $dobavljaci = Dobavljac::orderBy('ime')->get();
        return view('ponude_dobavljaca.create', compact('dobavljaci')); 
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
        $dobavljaci = Dobavljac::orderBy('naziv')->get();
        return view('ponude_dobavljaca.edit', compact('ponuda', 'dobavljaci'));
    }

    public function update(PonudaDobavljaca $ponuda)
    {
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

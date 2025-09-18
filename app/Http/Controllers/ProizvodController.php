<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Proizvod;
use App\Models\Magacin;

class ProizvodController extends Controller
{
    public function index()
    {
        // $jobs = Job::with('employer')->latest()->simplePaginate(3);
        $proizvodi = Proizvod::with('magacin')->get();

        return view('proizvodi.index', [
            'proizvodi' => $proizvodi
        ]);
    }

    public function show(Proizvod $proizvod)
    {
        return view('proizvodi.show', ['proizvod' => $proizvod]);
    }

    public function create()
    {
        return view('proizvodi.create');
    }

    public function store()
    {

        request()->validate([
            'nazivProizvoda' => ['required', 'min:3'],
            'opis' => ['required'],
            'cena' => ['required'],
            'kolicina' => ['required'],
            'magacin_id' => ['required'],
        ]);

        $proizvod = Proizvod::create([
            'nazivProizvoda' => request('nazivProizvoda'),
            'opis' => request('opis'),
            'cena' => request('cena'),
            'kolicina' => request('kolicina'),
            'magacin_id' => request('magacin_id')
        ]);

        return redirect()->route('proizvodi.index')->with('success', 'Proizvod uspešno kreiran.');
    }

    public function edit(Proizvod $proizvod)
    {
        $magacini = Magacin::all();

        return view('proizvodi.edit', [
            'proizvod' => $proizvod,
            'magacini' => $magacini,
        ]);

    }

    public function update(Proizvod $proizvod)
    {
        request()->validate([
            'nazivProizvoda' => ['required', 'min:3'],
            'opis' => ['required'],
            'cena' => ['required'],
            'kolicina' => ['required'],
            'magacin_id' => ['required'],
        ]);

        $proizvod->update([
            'nazivProizvoda' => request('nazivProizvoda'),
            'opis' => request('opis'),
            'cena' => request('cena'),
            'kolicina' => request('kolicina'),
            'magacin_id' => request('magacin_id'),
        ]);

        return redirect('/proizvodi/' . $proizvod->id)->with('success', 'Proizvod je uspešno azuriran.');
    }

    public function destroy(Proizvod $proizvod)
    {
        $proizvod->delete();

        return redirect('/proizvodi')->with('success', 'Proizvod je uspešno obrisan.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ReproMaterijal;
use App\Models\Magacin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReproMaterijalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materijali = ReproMaterijal::with('magacin')->get();
        return view('repro_materijali.index', compact('materijali'));
    }

    public function show(ReproMaterijal $reproMaterijal)
    {
        return view('repro_materijali.show', ['reproMaterijal' => $reproMaterijal]);
    }


    public function create()
    {
        return view('repro_materijali.create');
    }


    public function store()
    {
        request()->validate([
            'naziv' => ['required', 'min:3'],
            'cena' => ['required'],
            'jedinica_mere' => ['required'],
            // 'kolicina' => ['required'],
            'magacin_id' => ['required']
        ]);

        $proizvod = ReproMaterijal::create([
            'naziv' => request('naziv'),
            'jedinica_mere' => request('jedinica_mere'),
            'cena' => request('cena'),
            'kolicina' => request('kolicina'),
            'magacin_id' => request('magacin_id')
        ]);

        return redirect()->route('repro_materijali.index')->with('success', 'Proizvod uspešno kreiran.');
    }


    public function edit(ReproMaterijal $reproMaterijal)
    {
        $magacini = Magacin::all();

        return view('repro_materijali.edit', [
            'reproMaterijal' => $reproMaterijal,
            'magacini' => $magacini,
        ]);
    }

    public function update(Request $request, ReproMaterijal $reproMaterijal)
    {
        request()->validate([
            'naziv' => ['required', 'min:3'],
            'cena' => ['required'],
            'jedinica_mere' => ['required'],
            // 'kolicina' => ['required'],
            'magacin_id' => ['required'],
        ]);

        $reproMaterijal->update([
            'naziv' => request('naziv'),
            'cena' => request('cena'),
            'jedinica_mere' => request('jedinica_mere'),
            'kolicina' => request('kolicina'),
            'magacin_id' => request('magacin_id'),
        ]);

        return redirect('/repro_materijali/' . $reproMaterijal->id)->with('success', 'Repromaterijal je uspešno azuriran.');
    }

    public function destroy(ReproMaterijal $reproMaterijal)
    {
        $reproMaterijal->delete();

        return redirect('/repro_materijali')->with('success', 'Repromaterijal je uspešno obrisan.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dobavljac;
use App\Models\Magacin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class MagacinController extends Controller
{

    public function index(Request $request)
    {
        $query = Magacin::query();

        if ($request->filled('search')) {
            $query->where('nazivMagacina', 'like', '%' . $request->search . '%');
        }

        $magacini = $query->orderBy('nazivMagacina')->get();

        return view('magacini.index', compact('magacini'));
    }

    public function create()
    {
        return view('magacini.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nazivMagacina' => 'required|string|max:255',
            'lokacija' => 'required|string|max:255',
        ]);

        Magacin::create($request->all());

        return redirect()->route('magacini.index')
            ->with('success', 'Magacin je uspešno kreiran.');
    }

    public function show(Magacin $magacin)
    {
        return view('magacini.show', ['magacin' => $magacin]);
    }

    public function edit(Magacin $magacin)
    {
        return view('magacini.edit', compact('magacin'));
    }

    public function update(Request $request, Magacin $magacin)
    {
        $request->validate([
            'nazivMagacina' => 'required|string|max:255',
            'lokacija' => 'required|string|max:255',
        ]);

        $magacin->update($request->all());

        return redirect()->route('magacini.index')
            ->with('success', 'Magacin je uspešno ažuriran.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Magacin $magacin)
    {
        $magacin->delete();

        return redirect()->route('magacini.index')
            ->with('success', 'Magacin je uspešno obrisan.');
    }
}

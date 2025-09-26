<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Radnik;

class RadnikController extends Controller
{
    public function index(Request $request)
    {
        // $jobs = Job::with('employer')->latest()->simplePaginate(3);
        // $radnici = Radnik::all();

        // return view('radnici.index', [
        //     'radnici' => $radnici
        // ]);
        $query = Radnik::query();

        if ($request->filled('search')) {
            $query->where('ime', 'like', '%' . $request->search . '%');
        }

        $radnici = $query->orderBy('ime')->get();

        return view('radnici.index', compact('radnici'));
    }

    public function show(Radnik $radnik)
    {
        return view('radnici.show', ['radnik' => $radnik]);
    }

    public function create()
    {
        return view('radnici.create');
    }


    public function store()
    {
        request()->validate([
            'ime' => ['required', 'min:3'],
            'prezime' => ['required', 'min:3'],
            'pozicija' => ['required', 'min:3'],
            'plata' => ['required', 'min:3', 'numeric'],
        ]);

        $radnik = Radnik::create([
            'ime' => request('ime'),
            'prezime' => request('prezime'),
            'pozicija' => request('pozicija'),
            'plata' => request('plata')
        ]);

        return redirect()->route('radnici.index')->with('success', 'Radnik uspešno kreiran.');
    }

    public function edit(Radnik $radnik)
    {
        return view('radnici.edit', ['radnik' => $radnik]);
    }

    public function update(Radnik $radnik)
    {

        request()->validate([
            'ime' => ['required', 'min:3'],
            'prezime' => ['required', 'min:3'],
            'pozicija' => ['required', 'min:3'],
            'plata' => ['required', 'min:3', 'numeric'],
        ]);

        $radnik->update([
            'ime' => request('ime'),
            'prezime' => request('prezime'),
            'pozicija' => request('pozicija'),
            'plata' => request('plata'),
        ]);

        return redirect('/radnici/' . $radnik->id);
    }

    public function destroy(Radnik $radnik)
    {
        $radnik->delete();

        return redirect('/radnici');
    }
}

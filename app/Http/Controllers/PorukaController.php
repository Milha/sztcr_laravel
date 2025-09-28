<?php

namespace App\Http\Controllers;

use App\Models\Poruka;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PorukaController extends Controller
{

    public function index(Request $request)
    {
        $query = Poruka::query();

        if ($request->filled('search')) {
            $query->where('naslov', 'like', '%' . $request->search . '%');
        }

        $poruke = $query->orderBy('naslov')->get();

        return view('poruke.index', compact('poruke'));
    }

    public function show(Poruka $poruka)
    {
        return view('poruke.show', ['poruka' => $poruka]);
    }

    public function create()
    {
        return view('poruke.create');
    }

    public function store(Request $request)
    {
        if (!Auth::check()) {
            abort(403, 'Niste ulogovani.');
        }

        $validated = $request->validate([
            'naslov' => 'required|string|max:255',
            'sadrzaj' => 'required|string|max:2000',
        ]);

        Poruka::create([
            'posiljalac_id' => Auth::id(),
            'naslov' => $validated['naslov'],
            'sadrzaj' => $validated['sadrzaj'],
        ]);

        return redirect()->route('poruke.index')->with('success', 'Poruka uspešno poslata.');
    }

    public function edit(Poruka $poruka)
    {
        return view('poruke.edit', ['poruka' => $poruka]);
    }

    public function update(Request $request, Poruka $poruka)
    {
        $validated = request()->validate([
            'naslov' => 'required|string|max:255',
            'sadrzaj' => 'required|string|max:2000',
        ]);

        $poruka->update([
            'naslov' => $validated['naslov'],
            'sadrzaj' => $validated['sadrzaj'],
            'procitana' => $request->has('procitana'),
        ]);

        return redirect('/poruke/' . $poruka->id);
    }

    public function destroy(Poruka $poruka)
    {
        $poruka->delete();

        return redirect('/poruke')->with('success', 'Poruka uspešno obrisana.');
    }
}

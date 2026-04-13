<?php

namespace App\Http\Controllers;

use App\Models\Playfield;
use Illuminate\Http\Request;

class PlayfieldController extends Controller
{
    public function index()
    {
        $playfields = Playfield::withCount('games')->get();
        return view('playfields.index', [
            'playfields' => Playfield::paginate(10),
        ]);
    }

    public function create()
    {
        return view('playfields.create', [
            'users' => \App\Models\User::all() // For relationship dropdown
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'sponsor' => 'nullable|string|max:255',
            'size' => 'required|string',
            'last_maintained_at' => 'required|date'
        ]);

        Playfield::create($validated);

        return redirect()->route('playfields.index')
            ->with('success', 'Playfield created successfully!');
    }

    public function show(Playfield $playfield)
    {
        return view('playfields.show', compact('playfield'));
    }

    public function edit(Playfield $playfield)
    {
        return view('playfields.edit', [
            'playfield' => $playfield,
//            'users' => \App\Models\User::all()
        ]);
    }

    public function update(Request $request, Playfield $playfield)
    {
        $validated = $request->validate([
            'sponsor' => 'nullable|string|max:255',
            'size' => 'required|string',
            'last_maintained_at' => 'required|date'
        ]);

        $playfield->update($validated);

        return redirect()->route('playfields.show', $playfield)
            ->with('success', 'Playfield updated successfully!');
    }

    public function destroy(Playfield $playfield)
    {
        $playfield->delete();

        return redirect()->route('playfields.index')
            ->with('success', 'Playfield deleted successfully!');
    }
}

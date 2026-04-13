<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Playfield;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.  * * @return Application|Factory|View
     */
    public function index()
    {
        $matches = Game::with('playfield')->get();
        return view('games.index',
            compact(
                'matches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $playfields = Playfield::all();
        return view('games.create', compact('playfields'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */


    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Game $match
     * @return Response
     */
    public function show(Game $match)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Game $match
     * @return Response
     */
    public function edit(Game $match)
    {
        $playfields = Playfield::all();
        return view('games.edit', compact('playfields'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Game $match
     * @return Response
     */
    public function update(Request $request, Game $match)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Game $match
     * @return Response
     */
    public function destroy(Game $match)
    {
        //
    }
}

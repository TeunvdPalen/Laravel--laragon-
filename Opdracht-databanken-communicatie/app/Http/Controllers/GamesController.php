<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Publisher;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::all();
        return view('games.index', [
            'games' => $games,
            'publishers' => Publisher::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $game = new Game();
        return view('games.create', [
            'game' => $game,
            'publishers' => Publisher::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'publisher_id' => 'required',
        ]);

        $game = new Game();
        $game->name = $request->name;
        $game->publisher_id = $request->publisher_id;
        $game->completed = $request->completed == 'completed' ? true : false;
        $game->save();

        return redirect('/games');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $game = Game::find($id);
        return view('games.show', [
            'game' => $game,
            'games' => Game::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $game = Game::find($id);
        return view('games.edit', [
            'game' => $game,
            'publishers' => Publisher::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'publisher_id' => 'required',
        ]);

        $game = Game::find($id);
        $game->name = $request->name;
        $game->publisher_id = $request->publisher_id;
        $game->completed = $request->completed == 'completed' ? true : false;
        $game->save();

        return redirect('/games');
    }

    /**
     * Show the form for deleting
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $game = Game::find($id);
        return view('games.delete', [
            'game' => $game,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $game = Game::find($id);
        $game->delete();
        return redirect('/games');
    }
}
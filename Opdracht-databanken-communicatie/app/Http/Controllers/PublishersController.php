<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublishersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publishers = Publisher::all();
        return view('publishers.index', [
            'publishers' => $publishers,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $publisher = new Publisher();
        return view('publishers.create', [
            'publisher' => $publisher,
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
            'name' => ['required','unique:App\Models\Publisher,name'],
        ]);

        $publisher = new Publisher();
        $publisher->name = $request->name;
        $publisher->save();

        return redirect('/publishers/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $publisher = Publisher::find($id);
        return view('publishers.show', [
            'publisher' => $publisher,
            'games' => Game::where('publisher_id', $publisher->id)->get(),
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
        $publisher = Publisher::find($id);
        return view('publishers.edit', [
            'publisher' => $publisher,
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
            'name' => ['required','unique:App\Models\Publisher,name'],
        ]);

        $publisher = Publisher::find($id);
        $publisher->name = $request->name;
        $publisher->save();

        return redirect('/publishers/');
    }

    /**
     * Show the form for deleting
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $publisher = Publisher::find($id);
        return view('publishers.delete', [
            'publisher' => $publisher,
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
        $publisher = Publisher::find($id);
        $publisher->delete();
        return redirect('/publishers/');
    }
}
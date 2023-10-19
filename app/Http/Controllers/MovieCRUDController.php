<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $movie = new Movie();

        return view('movies.CRUD.form', compact('movie'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $movie = new Movie();
        $movie->name = $request->input('name');
        $movie->year = $request->input('year');
        $movie->save();

        session()->flash('success_message', 'The movie was saved in IMDB!');

        // return 'The movie was stored to DB';

        // we called save method, therefore we have available id
        return redirect()->route('movies.edit', $movie->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    { {
            $movie = Movie::findOrFail($id);

            // dd($movie);
            // check for example 111161

            return view('movies.CRUD.form', compact('movie'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $this->validate($request, [
            'name' => 'required',
            'year' => 'required|numeric|min:3',
        ], [
            'name.required' => 'You have to put the name dumbass!'
        ]);

        $movie = Movie::findOrFail($id);
        $movie->name = $request->input('name');
        $movie->year = $request->input('year');
        $movie->update();

        session()->flash('success_message', 'The movie was updated in IMDB!');

        return redirect()->route('movies.edit', $movie->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

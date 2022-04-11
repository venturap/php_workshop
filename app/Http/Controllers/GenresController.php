<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenresController extends Controller
{
    public function index()
    {
        return response()->json(['genres' => Genre::all()]);
    }

    public function show($id)
    {
        return response()->json(['genre' => Genre::findOrFail($id)]);
    }

    public function delete($id)
    {
        Genre::findOrFail($id)->delete();

        return response()->json(null, 204);
    }

    public function store(Request $request)
    {
        $genre = Genre::create($request->all());

        return response()->json($genre, 201);
    }

    public function update(Request $request, $id)
    {
        $genre = Genre::findOrFail($id);

        $genre->update($request->all());

        return response()->json($genre, 200);
    }
}

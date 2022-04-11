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
}

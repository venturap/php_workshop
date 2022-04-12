<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class DirectorController extends Controller
{
    public function index()
    {
        return Director::all()->toJson();
    }

    public function show($id)
    {
        /*
        try {
            return Director::findOrFail($id)->toJson();
        } catch (\Exception $e) {
            return response()->json(['error' => 'Director not found', 'errorMessage' => $e->getMessage()], 404);
        }
        */
        return Director::findorfail($id)->toJson();
    }

    public function store(Request $request)
    {
        $director = Director::create($request->all());

        return response()->json($director, 201);
    }

    public function delete($id)
    {
        $director = Director::findOrFail($id);

        $director->delete();

        return response()->json(null, 204);
    }

    public function update(Request $request, $id)
    {
        $director = Director::findOrFail($id);

        $director->update($request->all());

        return response()->json($director, 200);
    }
}

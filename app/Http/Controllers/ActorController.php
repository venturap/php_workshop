<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actor;

class ActorController extends Controller
{
    public function index()
    {
        return response()->json(['actors' => Actor::all()]);
    }

    public function show($id)
    {
        return response()->json(['actor' => Actor::findOrFail($id)]);
    }

    public function delete($id)
    {
        Actor::findOrFail($id)->delete();

        return response()->json(null, 204);
    }

    public function store(Request $request)
    {

        $actor = Actor::create($request->all());

        return response()->json($actor, 201);
    }

    public function update(Request $request, $id)
    {
        $actor = Actor::findOrFail($id);

        $actor->update($request->all());

        return response()->json($actor, 200);
    }

}

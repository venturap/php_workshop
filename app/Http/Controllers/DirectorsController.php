<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;

class DirectorsController extends Controller
{
    public function index()
    {
        return Director::all()->toJson();
    }

    public function show($id)
    {
        return Director::findorfail($id)->toJson();
    }

    public function store(Request $request)
    {

        //dd($request->all());

        $director = Director::create($request->all());

        return response()->json($director, 201);
    }
}

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

    public function show($request)
    {
       return Director::findorfail($request)->toJson();
    }

    public function store(Request $request)
    {
        $director = Director::create($request->all());
        return response()->json($director, 201);
    }
}

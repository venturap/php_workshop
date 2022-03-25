<?php

namespace App\Http\Controllers;

use App\Models\Greeting;

class WelcomeController extends Controller
{
    public function index()
    {
        #return 'Hello, World from inside a Controller!';


        $greetings = Greeting::all();

        // dd($greetings);

        // return view('greeting', ['name' => 'Pedro']);

        // return view('greeting', ['g1' => $greetings->greeting]);

        return view('greeting', ['greetings' => $greetings]);

    }


    public function shutdown()
    {
        return view('goodbye', ['greeting' => 'Adios!']);
    }
}

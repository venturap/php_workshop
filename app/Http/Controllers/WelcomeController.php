<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    public function index(): string
    {
        return 'Hello, World from inside a Controller!';
    }
}

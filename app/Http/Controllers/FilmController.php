<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;
use App\Models\Film;

class FilmController extends Controller
{
    public function index(){
        $films = Film::all();


        foreach($films as $film){
            echo $film->title . '<br>';
            echo $film->director->name . '<br>';
            echo $film->genre->name . '<br>';
            foreach($film->actors as $actor){
                echo $actor->name . '<br>';
            }
            echo '<br>';
        }

/*
        $actors = Actor::all();

        foreach($actors as $actor){
            echo $actor->name . '<br>';
            foreach($actor->films as $film){
                echo $film->title . '<br>';
                echo $film->director->name . '<br>';
            }
            echo '<br>';
        }
*/

    }
}

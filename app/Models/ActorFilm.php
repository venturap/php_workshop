<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;


class ActorFilm extends Pivot
{
    protected $table = 'films_actors';
}

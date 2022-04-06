<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    public function director()
    {
        return $this->belongsTo(Director::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function actors()
    {
        return $this->belongsToMany(Actor::class);
    }
}

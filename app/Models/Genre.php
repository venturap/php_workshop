<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = ['name', 'description'];


    public function films()
    {
        return $this->hasMany(Film::class);
    }
}

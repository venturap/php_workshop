<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{

    protected $fillable = [
        'name',
        'birth_date',
    ];

    public function films()
    {
        return $this->belongsToMany(Film::class);
    }

    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'artist',
        'release_year',
        'duration',
        'lyrics',
        'genre',
        'is_explicit',
        'release_date',
        'popularity',
        'description',
    ];
}

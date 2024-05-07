<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'priority',
        'description',
        'is_active',

    ];

    public function musics()
    {
        return $this->hasMany(Music::class, 'category_id');
    }
}

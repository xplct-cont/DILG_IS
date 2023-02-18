<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsimages extends Model
{
    use HasFactory;

    protected $fillable = ['news_unique_id', 'image', 'status'];

    protected $casts = [
        'image' => 'array'
    ];
}

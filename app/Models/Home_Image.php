<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home_Image extends Model
{
    use HasFactory;


    protected $primaryKey = 'id';
    protected $fillable =
    [
        'images'

    ];

    protected $table = "home_images";


    protected $casts = [
        'created_at' => 'datetime',

    ];
}
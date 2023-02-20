<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable =
    [
        'title',
        'caption',
        'images',

    ];

    protected $table = "updates";


    protected $casts = [
        'created_at' => 'datetime',
        
    ];

}
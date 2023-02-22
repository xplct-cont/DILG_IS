<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Downloadable extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable =
    [
        'title',
        'link',

    ];

    protected $table = "downloadables";


    protected $casts = [
        'created_at' => 'datetime',

    ];

}

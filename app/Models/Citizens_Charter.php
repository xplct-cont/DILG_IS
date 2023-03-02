<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Citizens_Charter extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable =
    [
       'title',
       'images',
    ];

    protected $table = "citizens_charters";


    protected $casts = [
        'created_at' => 'datetime',

    ];

   
}

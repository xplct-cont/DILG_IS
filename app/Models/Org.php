<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Org extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable =
    [
        'profile_img',
        'fname',
        'mid_initial',
        'lname',
        'position',

    ];

    protected $table = "orgs";


    protected $casts = [
        'created_at' => 'datetime',
        
    ];
}

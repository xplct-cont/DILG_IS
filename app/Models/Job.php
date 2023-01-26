<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    
    protected $primaryKey = 'id';
    protected $fillable =
    [
        'hiring_img',
        'position',
        'details',
        'link',

    ];

    protected $table = "jobs";


    protected $casts = [
        'created_at' => 'datetime',
        
    ];

}

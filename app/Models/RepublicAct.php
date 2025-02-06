<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RepublicAct extends Model
{
    protected $fillable = [
        'title',
        'link',
        'reference',
        'date',
        'download_link',
    ];
}


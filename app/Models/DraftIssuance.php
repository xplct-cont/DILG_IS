<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DraftIssuance extends Model
{
    protected $fillable = [
        'title',
        'link',
        'reference',
        'date',
        'download_link',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegalOpinion extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'link',
        'category',
        'reference',
        'date',
        'download_link',
    ];
}

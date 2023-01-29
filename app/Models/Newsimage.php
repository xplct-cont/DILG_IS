<?php

namespace App\Models;

use App\Models\News;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Newsimage extends Model
{
    use HasFactory;

    protected $table = 'newsimages';

    protected $guarded = [];

    // public function news()
    // {
    //     return $this->belongsTo(News::class);
    // }
}

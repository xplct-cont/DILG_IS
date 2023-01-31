<?php

namespace App\Models;

use App\Models\Newsimage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $guarded = [];

    // public function newsimage()
    // {
    //     return $this->hasMany(Newsimage::class);
    // }
}

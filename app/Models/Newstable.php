<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newstable extends Model
{
    use HasFactory;

    protected $fillable = ['unique_id', 'title', 'caption', 'datetime'];
}

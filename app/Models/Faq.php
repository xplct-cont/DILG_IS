<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable =
    [
        'outcome_area',
        'questions',
        'answers',

    ];

    protected $table = "faqs";


    protected $casts = [
        'created_at' => 'datetime',
        
    ];

}
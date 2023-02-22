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

    public function scopeSearch($query, $terms){
        collect(explode(" " , $terms))->filter()->each(function($term) use($query){
            $term = '%'. $term . '%';

            $query->where('questions', 'like', $term)
                ->orWhere('answers', 'like', $term)
                ->orWhere('outcome_area', 'like', $term);
        });
    }

}

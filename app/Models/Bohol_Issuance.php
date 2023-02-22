<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bohol_Issuance extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable =
    [
        'outcome_area',
        'title',
        'reference_num',
        'file',
        'date',
        'category',

    ];

    protected $table = "bohol_issuances";


    protected $casts = [
        'created_at' => 'datetime',

    ];


    public function scopeSearch($query, $terms){
        collect(explode(" " , $terms))->filter()->each(function($term) use($query){
            $term = '%'. $term . '%';

            $query->where('title', 'like', $term)
                ->orWhere('reference_num', 'like', $term)
                ->orWhere('category', 'like', $term);
        });
    }


}

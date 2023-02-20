<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable =
    [
        'title',
        'caption',
        'images',

    ];

    protected $table = "updates";


    protected $casts = [
        'created_at' => 'datetime',

    ];

    public function scopeSearch($query, $terms){
        collect(explode(" " , $terms))->filter()->each(function($term) use($query){
            $term = '%'. $term . '%';

            $query->where('title', 'like', $term)
                ->orWhere('caption', 'like', $term);
        });
    }

}

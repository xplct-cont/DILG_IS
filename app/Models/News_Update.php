<?php

namespace App\Models;

use App\Models\Newsimage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News_Update extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $fillable = [
        'title',
        'caption',
        'images',
    ];
    


    // public function scopeSearch($query, $terms){
    //     collect(explode(" " , $terms))->filter()->each(function($term) use($query){
    //         $term = '%'. $term . '%';

    //         $query->where('title', 'like', $term)
    //             ->orWhere('caption', 'like', $term)
    //             ->orWhere('datetime', 'like', $term);
    //     });
    // }
}

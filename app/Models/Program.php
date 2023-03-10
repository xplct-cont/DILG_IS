<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Program extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function project(){
        return $this->hasMany(Project::class);
    }
    public function scopeSearch($query, $terms){
        collect(explode(" " , $terms))->filter()->each(function($term) use($query){
            $term = '%'. $term . '%';

            $query->where('title', 'like', $term);
                // ->orWhere('description', 'like', $term)
                // ->orWhere('municipality-id', 'like', $term);
        });
    }
}

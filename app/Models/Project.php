<?php

namespace App\Models;

use App\Models\Program;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function program(){
        return $this->belongsTo(Program::class);
    }

    public function municipality() {
        return $this->belongsTo('App\Models\Municipality');
    }

    public function scopeSearch($query, $terms){
        collect(explode(" " , $terms))->filter()->each(function($term) use($query){
            $term = '%'. $term . '%';

            $query->where('program_id', 'like', $term)
                ->orWhere('description', 'like', $term)
                ->orWhere('municipality_id', 'like', $term)
                ->orWhere('status', 'like', $term)
                ->orWhere('type', 'like', $term)
                ->orWhere('title', 'like', $term);
        });
    }
}

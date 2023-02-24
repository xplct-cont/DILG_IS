<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bohol_Issuance extends Model
{
    use HasFactory, LogsActivity;

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
                ->orWhere('outcome_area', 'like', $term)
                ->orWhere('category', 'like', $term);
        });
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['outcome_area',
                    'title',
                    'reference_num',
                    'file',
                    'date',
                    'category',])
        ->setDescriptionForEvent(fn(string $eventName) => "An issuance has been {$eventName}")
        ->logOnlyDirty();
    }
}

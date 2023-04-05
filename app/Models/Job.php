<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory, LogsActivity;


    protected $primaryKey = 'id';
    protected $fillable =
    [
        'hiring_img',
        'position',
        'details',
        'link',
        'remarks'

    ];

    protected $table = "jobs";


    protected $casts = [
        'created_at' => 'datetime',

    ];

    public function scopeSearch($query, $terms){
        collect(explode(" " , $terms))->filter()->each(function($term) use($query){
            $term = '%'. $term . '%';

            $query->where('position', 'like', $term)
                ->orWhere('details', 'like', $term);
        });
    }
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['hiring_img',
                    'position',
                    'details',
                    'link',
                    'remarks',])
        ->setDescriptionForEvent(fn(string $eventName) => "A job vacancy has been {$eventName}")
        ->logOnlyDirty();
    }

}

<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FieldOfficer extends Model
{
    use HasFactory, LogsActivity;

    protected $primaryKey = 'id';
    protected $fillable =
    [
        'municipality_id',
        'profile_img',
        'fname',
        'mid_initial',
        'lname',
        'position',
        'cluster',

    ];

    protected $table = "field_officers";


    protected $casts = [
        'created_at' => 'datetime',

    ];

    public function municipality() {
        return $this->belongsTo('App\Models\Municipality');
    }


    public function scopeSearch($query, $terms){
        collect(explode(" " , $terms))->filter()->each(function($term) use($query){
            $term = '%'. $term . '%';

            $query->where('fname', 'like', $term)
                ->orWhere('lname', 'like', $term)
                ->orWhere('municipality_id', 'like', $term)
                ->orWhere('cluster', 'like', $term);

        });
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['municipality_id',
                    'profile_img',
                    'fname',
                    'mid_initial',
                    'lname',
                    'position',
                    'cluster',])
        ->setDescriptionForEvent(fn(string $eventName) => "A field officer has been {$eventName}")
        ->logOnlyDirty();
    }
}

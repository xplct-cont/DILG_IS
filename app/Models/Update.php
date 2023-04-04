<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Update extends Model
{
    use HasFactory, LogsActivity;

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
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function scopeSearch($query, $terms){
        collect(explode(" " , $terms))->filter()->each(function($term) use($query){
            $term = '%'. $term . '%';

            $query->where('title', 'like', $term)
                ->orWhere('status', 'like', $term)
                ->orWhere('caption', 'like', $term);
        });
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['title', 'caption', 'images'])
        ->setDescriptionForEvent(fn(string $eventName) => "A News and Updates has been {$eventName}")
        ->logOnlyDirty();
    }


}

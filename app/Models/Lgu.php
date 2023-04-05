<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lgu extends Model
{
    use HasFactory, LogsActivity;


    protected $primaryKey = 'id';
    protected $fillable =
    [
        'municipality_id',
        'mayor',
        'vice_mayor',
        'sb_member1',
        'sb_member2',
        'sb_member3',
        'sb_member4',
        'sb_member5',
        'sb_member6',
        'sb_member7',
        'sb_member8',
        'lb_pres',
        'psk_pres'

    ];

    protected $table = "lgus";


    protected $casts = [
        'created_at' => 'datetime',

    ];

    public function municipality() {
        return $this->belongsTo('App\Models\Municipality');

    }

    public function scopeSearch($query, $terms){
        collect(explode(" " , $terms))->filter()->each(function($term) use($query){
            $term = '%'. $term . '%';

            $query->where('mayor', 'like', $term)
                ->orWhere('vice_mayor', 'like', $term)
                ->orWhere('municipality_id', 'like', $term)
                ->orWhere('sb_member1', 'like', $term)
                ->orWhere('sb_member2', 'like', $term)
                ->orWhere('sb_member3', 'like', $term)
                ->orWhere('sb_member4', 'like', $term)
                ->orWhere('sb_member5', 'like', $term)
                ->orWhere('sb_member6', 'like', $term)
                ->orWhere('sb_member7', 'like', $term)
                ->orWhere('sb_member8', 'like', $term);

        });
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['municipality_id','mayor',
                    'vice_mayor','sb_member1',
                    'sb_member2','sb_member3',
                    'sb_member4','sb_member5',
                    'sb_member6','sb_member7','sb_member8',])
        ->setDescriptionForEvent(fn(string $eventName) => "A Municipal Official has been {$eventName}")
        ->logOnlyDirty();
    }

}

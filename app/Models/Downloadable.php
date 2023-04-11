<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Downloadable extends Model
{
    use HasFactory, LogsActivity;

    protected $primaryKey = 'id';
    protected $fillable =
    [
        'title',
        'link',
        'outcome_area',
        'program',
        'file'

    ];

    protected $table = "downloadables";


    protected $casts = [
        'created_at' => 'datetime',

    ];
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['title','link',])
        ->setDescriptionForEvent(fn(string $eventName) => "A downloadable has been {$eventName}")
        ->logOnlyDirty();
    }

}

<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Org extends Model
{
    use HasFactory, LogsActivity;

    protected $primaryKey = 'id';
    protected $fillable =
    [
        'profile_img',
        'fname',
        'mid_initial',
        'lname',
        'position',

    ];

    protected $table = "orgs";


    protected $casts = [
        'created_at' => 'datetime',

    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['profile_img','fname',
                    'mid_initial','lname','position'])
        ->setDescriptionForEvent(fn(string $eventName) => "The organizational Structure has been {$eventName}")
        ->logOnlyDirty();
    }
}

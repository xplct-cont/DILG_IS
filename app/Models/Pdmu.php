<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pdmu extends Model
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

    protected $table = "pdmus";


    protected $casts = [
        'created_at' => 'datetime',

    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['profile_img','fname',
                    'mid_initial','lname','position'])
        ->setDescriptionForEvent(fn(string $eventName) => "The PDMU has been {$eventName}")
        ->logOnlyDirty();
    }
}

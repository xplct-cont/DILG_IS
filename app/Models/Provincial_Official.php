<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Provincial_Official extends Model
{
    use HasFactory, LogsActivity;

    protected $primaryKey = 'id';
    protected $fillable =
    [
        'profile_image',
        'name',
        'position',
        'message',


    ];

    protected $table = "provincial_officials";


    protected $casts = [
        'created_at' => 'datetime',

    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['profile_image', 'name',
                    'position', 'message',])
        ->setDescriptionForEvent(fn(string $eventName) => "The Provincial Official has been {$eventName}")
        ->logOnlyDirty();
    }
}

<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Citizens_Charter extends Model
{
    use HasFactory, LogsActivity;

    protected $primaryKey = 'id';
    protected $fillable =
    [
       'title',
       'images',
    ];

    protected $table = "citizens_charters";


    protected $casts = [
        'created_at' => 'datetime',

    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['title', 'images', 'outcome_area'])
        ->setDescriptionForEvent(fn(string $eventName) => "Citizen's Charter has been {$eventName}")
        ->logOnlyDirty();
    }

}

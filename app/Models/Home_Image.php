<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Home_Image extends Model
{
    use HasFactory;


    protected $primaryKey = 'id';
    protected $fillable =
    [
        'images'

    ];

    protected $table = "home_images";


    protected $casts = [
        'created_at' => 'datetime',

    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['images'])
        ->setDescriptionForEvent(fn(string $eventName) => "The Home Image has been {$eventName}")
        ->logOnlyDirty();
    }
}

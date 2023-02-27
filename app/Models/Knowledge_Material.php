<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Knowledge_Material extends Model
{
    use HasFactory, LogsActivity;

    protected $primaryKey = 'id';
    protected $fillable =
    [
        'title',
        'link',

    ];

    protected $table = "knowledge_materials";


    protected $casts = [
        'created_at' => 'datetime',

    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['title','link',])
        ->setDescriptionForEvent(fn(string $eventName) => "A knowledge material has been {$eventName}")
        ->logOnlyDirty();
    }

}

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
       'page_num',
       'images',
    ];

    protected $table = "citizens_charters";


    protected $casts = [
        'created_at' => 'datetime',

    ];

   
}

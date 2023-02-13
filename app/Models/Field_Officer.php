<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field_Officer extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable =
    [
        'municipality_id',
        'profile_img',
        'fname',
        'mid_initial',
        'lname',
        'position',
        'cluster',

    ];

    protected $table = "field_officers";


    protected $casts = [
        'created_at' => 'datetime',
        
    ];

    public function municipality() {
        return $this->belongsTo('App\Models\Municipality');
    }
}

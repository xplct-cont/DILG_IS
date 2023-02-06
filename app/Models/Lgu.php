<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lgu extends Model
{
    use HasFactory;

    
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

    ];

    protected $table = "lgus";


    protected $casts = [
        'created_at' => 'datetime',
        
    ];
    
    public function municipality() {
        return $this->belongsTo('App\Models\Municipality');

    }

}

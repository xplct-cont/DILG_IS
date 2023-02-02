<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    use HasFactory;

    
    protected $primaryKey = 'id';
    protected $fillable =
    [
        'municipality',

    ];

    protected $table = "municipalities";


    protected $casts = [
        'created_at' => 'datetime',
        
    ];

    public function lgu(){
        return $this->hasMany('App\Models\Lgu');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutComeArea extends Model
{
    use HasFactory;

    
    protected $primaryKey = 'id';
    protected $fillable =
    [
        'title',

    ];

    protected $table = "out_come_areas";


    protected $casts = [
        'created_at' => 'datetime',

    ];


    public function bohol_issuance(){
        return $this->hasMany('App\Models\Bohol_Issuance');
    }



}

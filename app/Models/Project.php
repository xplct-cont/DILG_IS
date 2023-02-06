<?php

namespace App\Models;

use App\Models\Program;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function program(){
        return $this->belongsTo(Program::class);
    }

    public function municipality() {
        return $this->belongsTo('App\Models\Municipality');
    }
}

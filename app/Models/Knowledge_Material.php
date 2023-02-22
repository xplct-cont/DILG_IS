<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Knowledge_Material extends Model
{
    use HasFactory;

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

}

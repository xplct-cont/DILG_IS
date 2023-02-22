<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Downloadable extends Model
{
    use HasFactory;

<<<<<<< HEAD:app/Models/OutComeArea.php

=======
>>>>>>> ca5053af385c6c2ddcd1278ecc8b485b81f10d64:app/Models/Downloadable.php
    protected $primaryKey = 'id';
    protected $fillable =
    [
        'title',
        'link',

    ];

    protected $table = "downloadables";


    protected $casts = [
        'created_at' => 'datetime',

    ];

}

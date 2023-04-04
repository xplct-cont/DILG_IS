<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pdf_Upload_Cit_Charter extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable =
    [
        'file',

    ];

    protected $table = "pdf_upload_cit_charters";


    protected $casts = [
        'created_at' => 'datetime',

    ];

}

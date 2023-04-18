<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PicNumber extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_institution',
        'pic'
    ];

    protected $hidden = [
        'id',
        'id_institution',
        'created_at',
        'updated_at'
    ];

}

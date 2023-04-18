<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RidCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_category',
        'category'
    ];
}

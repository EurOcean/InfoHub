<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Partnership extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'created',
        'createdBy',
        'lastUpdt',
        'lastUpdtBy',
    ];

    protected $hidden = [
        "id",
        "created",
        'description',
        "createdBy",
        "lastUpdt",
        "lastUpdtBy",
        "created_at",
        "updated_at"
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
            "continentID",
            "code",
            "name",
            "isEU",
            "latitude",
            "longitude",
            "created",
            "createdBy",
            "LastUpdt",
            "lastUpdBy",
            "RID_id",
            "id_1",
            "id_2",
            "id_3",
            "id_4",
            "id_5",
            "various",
            "HIDE_ON_FILTERS",
    ];

}

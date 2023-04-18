<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programmer extends Model
{
    use HasFactory;

    protected $fillable = [
        "programmeTypeID",
        "programmeLevelID",
        "name",
        "acronym",
        "description",
        "webpage",
        "created",
        "createdBy",
        "lastUpdt",
        "lastUpdtBy",
        "countryID",
        "RID_id",
        "id_1",
        "id_2",
        "id_3",
        "id_4",
        "id_5",
        "richTextContent1",
        "richTextContent2",
    ];

}

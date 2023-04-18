<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProjectInstitution;

class Institution extends Model
{
    use HasFactory;

    protected $fillable = [
        "CountryID",
        "name",
        "institution_acronym",
        "webpage",
        "latitude",
        "longitude",
        "created",
        "createdBy",
        "lastUpdt",
        "lastUpdtBy",
        "email",
        "typeID",
        "nativeName",
        "nativeAcronym",
        "address",
        "zipCode",
        "city",
        "state",
        "phone",
        "fax",
        "url",
        "RID_id",
        "id_1",
        "id_2",
        "id_3",
        "id_4",
        "id_5",
        "funding"
    ];

    protected $hidden = [
        "id",
        "webpage",
        "latitude",
        "longitude",
        "created",
        "createdBy",
        "lastUpdt",
        "lastUpdtBy",
        "email",
        "typeID",
        "nativeName",
        "nativeAcronym",
        "address",
        "zipCode",
        "city",
        "state",
        "phone",
        "fax",
        "url",
        "RID_id",
        "id_1",
        "id_2",
        "id_3",
        "id_4",
        "id_5",
        "funding",
        "created_at",
        "updated_at"
    ];

    /**
    * Get the user that owns the Institution
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function projects()
    {
        return $this->HasMany(ProjectInstitution::class, 'institutionID', 'id');
    }

    /**
     * Get the user that owns the Institution
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    // public function country()
    // {
    //     return $this->belongsTo(Country::class, 'country_ID', 'id');
    // }

    public function picNumber()
    {
        return $this->HasMany(PicNumber::class, 'id_institution');
        // return $this->hasManyThrough(ProjectInstitution::class, PicNumber::class, 'id_institution', 'institutionID');
    }

    public function country()
    {
        return $this->hasOne(Country::class, 'id', 'countryID');
    }

}

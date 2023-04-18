<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rid extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_institution',
        'picNumber',
        'vatNumber',
        'name',
        'shortName',
        'activityType',
        'street',
        'city',
        'postCode',
        'country',
        'geolocation',
        'organizationURL',
    ];

    public function kg()
    {
        // return $this->hasMany(KG::class, 'picNumber', 'organizationID');
        return $this->hasMany(KG::class, 'organizationID', 'picNumber');
    }

    public function owner()
    {
        return $this->hasMany(RidRelInfrastructureInstitution::class, 'id_institution', 'id_institution');
        // return $this->belongsTo(KG::class, 'organizationID', 'picNumber ');
        // return $this->hasMany(KG::class, 'organizationID', 'picNumber');
        // return $this->hasManyThrough(
        //     RidInstitutions::class,
        //     KG::class,
        //     'organizationID',
        //     'id_institution',
        //     'picNumber',
        //     'organizationID'
        // );
        // return $this->belongsToMany(Rid::class, RidRelInfrastructureInstitution::class, 'organizationID', 'id_institution');
    }
}

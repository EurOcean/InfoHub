<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RidKgMerge extends Model
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

    public function country_name()
    {
        return $this->hasOne(Country::class, 'code', 'country');
    }
}

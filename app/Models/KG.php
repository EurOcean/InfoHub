<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KG extends Model
{
    use HasFactory;

    protected $fillable = [
        'picNumber',
        'id_kg',
        'vatNumber',
        'name',
        'shortName',
        'activityType',
        'street',
        'postCode',
        'city',
        'country',
        'geolocation',
        'organizationURL',
    ];

    public function rid()
    {
        return $this->belongsTo(Rid::class, 'id_kg', 'picNumber');
    }
}

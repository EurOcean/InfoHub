<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RidInstitutions extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_institution',
        'old_rid_id',
        'edmo_id',
        'kg_id',
        'id_country',
        'id_status_institution',
        'institution_name',
        'acronym_inEnglish',
        'institution_name_inEnglish',
        'institution_name_native',
        'street',
        'postCode',
        'city',
        'website',
        'latitude',
        'longitude',
    ];

    public function ridInfrastructure()
    {
        return $this->hasOne(RidRelInfrastructureInstitution::class, 'id_institution', 'id_infrastructure');
    }

}

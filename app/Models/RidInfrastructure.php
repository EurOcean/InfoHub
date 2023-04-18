<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RidInstitutions;

class RidInfrastructure extends Model
{
    use HasFactory;

    protected $fillable = [
        '@id',
        'id_infrastructure',
        'name_infrastructure',
        'id_country',
        'id_category',
        'type',
        'year_built',
        'year_last_refit',
        'length',
        'max_operating_depth',
        'contact_person',
        'email',
        'id_relationWithInfrastructure',
        'phone',
        'address',
        'access_conditions',
        'data_examples',
        'url_infrastructure',
        'x',
        'y',
        'location',
        'services_offered',
        'last_update',
        'id_status_act',
        'isConfirmed',
        'editOriginalID',
    ];

    public function ridInstitution()
    {
        return $this->belongsToMany(RidInstitutions::class, 'rid_rel_infrastructure_institutions', 'id_institution', 'id_infrastructure');
    }

}

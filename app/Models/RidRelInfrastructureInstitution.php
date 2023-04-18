<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RidInfrastructure;


class RidRelInfrastructureInstitution extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_infrastructure';

    protected $fillable = [
        'id_infrastructure',
        'status',
        'id_institution'
    ];

    protected $hidden = [
        '@id',
        'id_infrastructure',
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


    public function owners()
    {
        return $this->hasMany(RidInstitutions::class, 'id_institution', 'id_institution')->select('institution_name', 'acronym_inEnglish', 'id_country');
    }

    public function operators()
    {
        return $this->hasMany(RidInstitutions::class, 'id_institution', 'id_institution')->select('institution_name', 'acronym_inEnglish', 'id_country');
    }

    public function country_name()
    {
        return $this->hasOne(Country::class, 'code', 'country');
    }

}


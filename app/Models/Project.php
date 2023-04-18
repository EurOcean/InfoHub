<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    use \Znck\Eloquent\Traits\HasTableAlias;

    protected $fillable = [
        '@id',
        'source_ID',
        'RID',
        'contractNumber',
        'acronym',
        'title',
        'programmeID',
        'startDate',
        'endDate',
        'projectFunding',
        'summary',
        'webSite',
        'informationSource',
        'onlineStatus',
        'adminNotes',
        'created',
        'createdBy',
        'lastUpdt',
        'lastUpdtBy',
        'contactPerson',
        'descriptor1ID',
        'descriptor2ID',
        'descriptor3ID',
        'descriptor4ID',
        'url_finalReport',
        'coordinatorEmail',
        'eurOceanRIDProject',
        'startYear',
        'endYear',
    ];

    protected $hidden = ['id', 'RID'];

    /**
     * Get the user associated with the Project
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function organization()
    {
        return $this->hasMany(ProjectInstitution::class, 'projectID', 'id');
    }

    public function country()
    {
        return $this->hasOne(Institution::class, 'countryID', 'id');
    }

    public function organizationID()
    {
        return $this->hasOne(ProjectInstitution::class, 'institutionID', 'id');
    }

    public function organizationName()
    {
        return $this->hasOne(Institution::class, 'name', 'id');
    }

}

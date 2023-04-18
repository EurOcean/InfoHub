<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Staudenmeir\EloquentHasManyDeep\HasRelationships;

class ProjectInstitution extends Model
{
    use HasFactory;

    protected $fillable = [
        'projectID',
        'institutionID',
        'partnershipID',
        'contribution',
        'created',
        'createdBy',
        'lastUpdt',
        'lastUpdtBy'
    ];

    protected $hidden = [
        'laravel_through_key',
        'created',
        'createdBy',
        'lastUpdt',
        'lastUpdtBy',
        'created_at',
        'updated_at'
    ];

    public function project()
    {
        return $this->hasMany(Project::class, 'id', 'projectID');
    }

    public function coordinator()
    {
        return $this->hasMany(Partnership::class, 'id', 'partnershipID');
    }

    public function partners()
    {
        return $this->hasMany(Institution::class, 'id', 'institutionID');
    }

    public function country()
    {
        return $this->hasManyThrough(Institution::class, Project::class);
    }

    public function programme()
    {
        return $this->hasOne(Programmer::class, 'name', 'programmeID');
    }

}

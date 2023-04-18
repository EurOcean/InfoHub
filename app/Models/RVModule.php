<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RVModule extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_rvmodule',
        'ices_shipcode',
        'mmsi',
        'imo'
    ];

    public function RVModule()
    {
        return $this->belongsTo(Vessel::class, 'id_infrastructure', 'id_rvmodule');
    }
}

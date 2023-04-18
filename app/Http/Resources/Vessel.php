<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Vessel extends JsonResource
{

    public static $wrap = null;

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "@context" => [
                '@vocab' => 'https://schema.org/'
            ],
            "@type" => 'Vessel',
            "nameInfrastructure" => $this->name_infrastructure,
            "country" => $this->country_name,
            "category" => $this->id_category,
            "yearBuilt" => $this->year_built,
            "yearLastRefit" => $this->year_last_refit,
            "length" => $this->length,
            "contactPerson" => $this->contact_person,
            "address" => $this->address,
            "urlInfrastructure" => $this->url_infrastructure,
            "location" => $this->location,
            "servicesOffered" => $this->services_offered,
            "lastUpdate" => $this->last_update,
            "lastUpdate" => $this->last_update,
            'owners' => $this->owners,
            'operators' => $this->operators
        ];
    }
}

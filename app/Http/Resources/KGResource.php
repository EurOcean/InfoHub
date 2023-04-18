<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class KGResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'id_kg' => $this->id_kg,
            'organizationID' => $this->organizationID,
            'vatNumber' => $this->vatNumber,
            'name' => $this->name,
            'shortName' => $this->shortName,
            'activityType' => $this->activityType,
            'street' => $this->street,
            'postCode' => $this->postCode,
            'city' => $this->city,
            'country' => $this->country,
            'geolocation' => $this->geolocation,
            'organizationURL' => $this->organizationURL,
        ];
    }
}

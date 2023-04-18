<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RidResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'id_institution' => $this->id_institution,
            'picNumber' => $this->picNumber,
            'vatNumber' => $this->vatNumber,
            'name' => $this->name,
            'shortName' => $this->shortName,
            'activityType' => $this->activityType,
            'street' => $this->street,
            'city' => $this->city,
            'postCode' => $this->postCode,
            'country' => $this->country,
            'geolocation' => $this->geolocation,
            'organizationURL' => $this->organizationURL
        ];
    }
}

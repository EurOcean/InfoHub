<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Organization extends JsonResource
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
            "@type" => 'Organization',
            "picNumber" => $this->picNumber,
            "vatNumber" => $this->vatNumber,
            "name" => $this->name,
            "shortName" => $this->shortName,
            "activityType" => $this->activityType,
            "street" => $this->street,
            "city" => $this->city,
            "postCode" => $this->postCode,
            "country" => $this->country,
            "geolocation" => $this->geolocation,
            "organizationURL" => $this->organizationURL
        ];
    }
}

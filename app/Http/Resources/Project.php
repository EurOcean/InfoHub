<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


class Project extends JsonResource
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
        // dd($this);
        // return parent::toArray($request);
        return [
            "@context" => [
                '@vocab' => 'https://schema.org/'
            ],
            "@type" => 'Project',
            "contractNumber" => $this->contractNumber,
            "acronym" => $this->acronym,
            "title" => $this->title,
            "programmeID" => $this->programme,
            // 'programmeID' => $this->whenPivotLoaded('project_institutions', function () {
            //     return $this->programmeID->name;
            // }),
            "projectFunding" => $this->projectFunding,
            "summary" => $this->summary,
            "webSite" => $this->webSite,
            "startYear" => $this->startYear,
            "endYear" => $this->endYear,
            "coordinator" => $this->coordinator,
            "partners" => $this->partners
        ];
    }

}

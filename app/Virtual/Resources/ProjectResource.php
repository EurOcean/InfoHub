<?php

/**
    * @OA\Schema(
    *     title="ProjectResource",
    *     description="Project resource",
    *     @OA\Xml(
    *         name="ProjectResource"
    *     )
    * )
*/

class ProjectResource
{

    /**
        * @OA\Property(
        *     title="Project Data",
        *     description="Data wrapper"
        * )
        *
        * @var \App\Virtual\Models\Project[]
    */
    private $data;

}

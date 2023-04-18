<?php

/**
 * @OA\Schema(
 *      title="Store Project request",
 *      description="Store Project request body data",
 *      type="object",
 *      required={"name"}
 * )
 */

class StoreProjectRequest
{
    /**
        * @OA\Property(
        *     title="ID",
        *     description="ID",
        *     format="int64",
        *     example=1
        * )
        *
        * @var integer
        */
        private $id;

        /**
            * @OA\Property(
            *      title="Source ID",
            *      description="Source id of the project",
            * )
            *
            * @var string
            */
        public $source_ID;

        /**
            * @OA\Property(
            *      title="RID",
            *      description="ID RID",
            * )
            *
            * @var integer
            */
        private $RID;

        /**
            * @OA\Property(
            *      title="Contract Number",
            *      description="Contract number of the project",
            * )
            *
            * @var string
            */
        public $contractNumber;

        /**
            * @OA\Property(
            *      title="Acronym",
            *      description="Acronym of the project",
            * )
            *
            * @var string
            */
        public $acronym;

        /**
            * @OA\Property(
            *      title="Title",
            *      description="Title of the project",
            * )
            *
            * @var string
            */
        public $title;

        /**
            * @OA\Property(
            *      title="Programme ID",
            *      description="Programme ID of the project",
            * )
            *
            * @var integer
            */
        private $programmeID;

        /**
            * @OA\Property(
            *      title="Start date",
            *      description="Start date of the project",
            * )
            *
            * @var date
            */
        public $startDate;

        /**
            * @OA\Property(
            *      title="End date",
            *      description="End date of the project",
            * )
            *
            * @var date
            */
        public $endDate;

        /**
            * @OA\Property(
            *      title="Project Funding",
            *      description="Project funding of the project",
            * )
            *
            * @var decimal
            */
        public $projectFunding;

        /**
            * @OA\Property(
            *      title="Summary",
            *      description="Summary funding of the project",
            * )
            *
            * @var string
            */
        public $summary;

        /**
            * @OA\Property(
            *      title="Web Site",
            *      description="Website funding of the project",
            * )
            *
            * @var string
            */
        public $webSite;

        /**
            * @OA\Property(
            *      title="Information Source",
            *      description="Information source funding of the project",
            * )
            *
            * @var string
            */
        public $informationSource;

        /**
            * @OA\Property(
            *      title="Online Status",
            *      description="Online status of the project",
            * )
            *
            * @var string
            */
        public $onlineStatus;

        /**
            * @OA\Property(
            *      title="Admin Notes",
            *      description="Admin notes of the project",
            * )
            *
            * @var string
            */
        public $adminNotes;

        /**
            * @OA\Property(
            *      title="Created",
            *      description="Project Created",
            * )
            *
            * @var string
            */
        public $created;

        /**
            * @OA\Property(
            *      title="createdBy",
            *      description="Project created by",
            * )
            *
            * @var integer
            */
        public $createdBy;

        /**
            * @OA\Property(
            *      title="lastUpdt",
            *      description="Last Update",
            * )
            *
            * @var string
            */
        public $lastUpdt;
}

<?php

namespace Itscaro\JsonMapper\Jenkins;

class Build extends AbstractClass
{

    public $number;
    public $url;
    public $actions;

    /**
     *
     * @var Artifact[]
     */
    public $artifacts;
    public $building;
    public $description;
    public $duration;
    public $estimatedDuration;
    public $executor;
    public $fullDisplayName;
    public $id;
    public $keepLog;
    public $result;
    public $timestamp;
    public $builtOn;

    /**
     *
     * @var Changeset
     */
    public $changeSet;

    /**
     *
     * @var User[]
     */
    public $culprits;

    /**
     * Convert JSON string to object of this type
     * @param string $json
     * @return Build
     * @throws \Exception
     */
    public static function jsonToObject($json)
    {
        return parent::jsonToObject($json);
    }

}

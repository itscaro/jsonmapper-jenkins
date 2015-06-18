<?php

namespace Quan\Console\Mapper\Jenkins;

class Job extends AbstractClass
{

    public $actions;
    public $description;
    public $displayName;
    public $displayNameOrNull;
    public $name;
    public $url;
    public $buildable;

    /**
     *
     * @var Build[]
     */
    public $builds;
    public $color;
    public $firstBuild;
    public $healthReport;
    public $inQueue;
    public $lastBuild;
    public $lastCompletedBuild;
    public $lastFailedBuild;
    public $lastStableBuild;
    public $lastSuccessfulBuild;
    public $lastUnstableBuild;
    public $lastUnsuccessfulBuild;
    public $nextBuildNumber;
    public $property;
    public $queueItem;
    public $concurrentBuild;
    public $downstreamProjects;
    public $upstreamProjects;
    public $scm;

    /**
     * Convert JSON string to object of this type
     * @param string $json
     * @return Job
     * @throws \Exception
     */
    public static function jsonToObject($json)
    {
        return parent::jsonToObject($json);
    }

}

<?php

namespace Itscaro\JsonMapper\Jenkins;

class Main extends AbstractClass
{

    public $assignedLabels;
    public $mode;
    public $nodeDescription;
    public $nodeName;
    public $numExecutors;
    public $description;

    /**
     *
     * @var Job[]
     */
    public $jobs;
    public $overallLoad;

    /**
     *
     * @var View
     */
    public $primaryView;
    public $quietingDown;
    public $slaveAgentPort;
    public $unlabeledLoad;
    public $useCrumbs;
    public $useSecurity;

    /**
     *
     * @var View[]
     */
    public $views;

    /**
     * Convert JSON string to object of this type
     * @param string $json
     * @return Main
     * @throws \Exception
     */
    public static function jsonToObject($json)
    {
        return parent::jsonToObject($json);
    }

}

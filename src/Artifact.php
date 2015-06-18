<?php

namespace Itscaro\JsonMapper\Jenkins;

class Artifact extends AbstractClass
{

    public $displayPath;
    public $fileName;
    public $relativePath;

    /**
     * Convert JSON string to object of this type
     * @param string $json
     * @return Artifact
     * @throws \Exception
     */
    public static function jsonToObject($json)
    {
        return parent::jsonToObject($json);
    }

}

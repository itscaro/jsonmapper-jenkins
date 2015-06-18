<?php

namespace Quan\Console\Mapper\Jenkins;

abstract class AbstractClass
{

    /**
     * Convert JSON string to object of this type
     * @param string $json
     * @return AbstractClass
     * @throws \Exception
     */
    public static function jsonToObject($json)
    {
        $jsonObj = json_decode($json);

        if (json_last_error() != 0) {
            throw new \Exception('Could not decode JSON: ' . json_last_error_msg());
        }

        $mapper = new \JsonMapper();
        return $mapper->map($jsonObj, new static);
    }

}

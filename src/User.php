<?php

namespace Itscaro\JsonMapper\Jenkins;

class User extends AbstractClass
{

    public $absoluteUrl;
    public $fullName;
    public $description;
    public $id;

    /**
     *
     * @var array[]
     */
    public $property;

    /**
     * Convert JSON string to object of this type
     * @param string $json
     * @return User
     * @throws \Exception
     */
    public static function jsonToObject($json)
    {
        return parent::jsonToObject($json);
    }

}

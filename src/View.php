<?php

namespace Itscaro\JsonMapper\Jenkins;

class View extends AbstractClass
{

    /**
     *
     * @var View
     */
    public $name;
    public $url;

    /**
     * Convert JSON string to object of this type
     * @param string $json
     * @return View
     * @throws \Exception
     */
    public static function jsonToObject($json)
    {
        return parent::jsonToObject($json);
    }

}

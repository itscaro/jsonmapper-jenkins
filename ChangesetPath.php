<?php

namespace Quan\Console\Mapper\Jenkins;

class ChangesetPath extends AbstractClass
{

    public $editType;
    public $file;

    /**
     * Convert JSON string to object of this type
     * @param string $json
     * @return ChangesetPath
     * @throws \Exception
     */
    public static function jsonToObject($json)
    {
        return parent::jsonToObject($json);
    }

}

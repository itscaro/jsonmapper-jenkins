<?php

namespace Quan\Console\Mapper\Jenkins;

class Changeset extends AbstractClass
{

    /**
     *
     * @var ChangesetItem[]
     */
    public $items;
    public $kind;

    /**
     * Convert JSON string to object of this type
     * @param string $json
     * @return Changeset
     * @throws \Exception
     */
    public static function jsonToObject($json)
    {
        return parent::jsonToObject($json);
    }

}

<?php

namespace Itscaro\JsonMapper\Jenkins;

class ChangesetItem extends AbstractClass
{

    /**
     *
     * @var array
     */
    public $affectedPaths;
    public $commitId;
    public $timestamp;

    /**
     *
     * @var User
     */
    public $author;
    public $comment;
    public $date;
    public $id;
    public $msg;

    /**
     *
     * @var ChangesetPath[]
     */
    public $paths;

    /**
     * Convert JSON string to object of this type
     * @param string $json
     * @return ChangesetItem
     * @throws \Exception
     */
    public static function jsonToObject($json)
    {
        return parent::jsonToObject($json);
    }

}

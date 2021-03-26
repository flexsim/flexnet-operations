<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateProductRelationshipDataType
{

    /**
     * @var string
     */
    private $newRelation;

    /**
     * Constructor
     *
     * @var string $newRelation
     */
    public function __construct(string $newRelation)
    {
        $this->newRelation = $newRelation;
    }

    /**
     * create a new instance of this class
     *
     * @var string $newRelation
     */
    public static function create(string $newRelation)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getNewRelation()
    {
        return $this->newRelation;
    }

    /**
     * @param string $newRelation
     * @return $this
     */
    public function setNewRelation($newRelation)
    {
        $this->newRelation = $newRelation;
        return $this;
    }


}


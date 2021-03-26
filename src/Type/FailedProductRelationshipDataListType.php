<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedProductRelationshipDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedProductRelationshipDataType
     */
    private $failedRelationship;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedProductRelationshipDataType|array $failedRelationship
     */
    public function __construct($failedRelationship = null)
    {
        $this->failedRelationship = $failedRelationship;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedProductRelationshipDataType|array $failedRelationship
     */
    public static function create($failedRelationship = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedProductRelationshipDataType
     */
    public function getFailedRelationship()
    {
        return $this->failedRelationship;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedProductRelationshipDataType $failedRelationship
     * @return $this
     */
    public function setFailedRelationship($failedRelationship)
    {
        $this->failedRelationship = $failedRelationship;
        return $this;
    }


}


<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedUpdateProductRelationshipDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedUpdateProductRelationshipDataType
     */
    private $failedRelationship;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedUpdateProductRelationshipDataType|array $failedRelationship
     */
    public function __construct($failedRelationship = null)
    {
        $this->failedRelationship = $failedRelationship;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedUpdateProductRelationshipDataType|array $failedRelationship
     */
    public static function create($failedRelationship = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedUpdateProductRelationshipDataType
     */
    public function getFailedRelationship()
    {
        return $this->failedRelationship;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedUpdateProductRelationshipDataType $failedRelationship
     * @return $this
     */
    public function setFailedRelationship($failedRelationship)
    {
        $this->failedRelationship = $failedRelationship;
        return $this;
    }


}


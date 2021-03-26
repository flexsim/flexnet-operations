<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedUpdateProductRelationshipDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateProductRelationshipDataType
     */
    private $relationship;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateProductRelationshipDataType $relationship
     * @var string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\UpdateProductRelationshipDataType $relationship, string $reason)
    {
        $this->relationship = $relationship;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateProductRelationshipDataType $relationship
     * @var string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\UpdateProductRelationshipDataType $relationship, string $reason)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateProductRelationshipDataType
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateProductRelationshipDataType $relationship
     * @return $this
     */
    public function setRelationship($relationship)
    {
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }


}


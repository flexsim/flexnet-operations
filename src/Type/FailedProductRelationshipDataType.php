<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedProductRelationshipDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductRelationshipDataType
     */
    private $relationship;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\ProductRelationshipDataType $relationship
     * @var string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\ProductRelationshipDataType $relationship = null, string $reason = null)
    {
        $this->relationship = $relationship;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\ProductRelationshipDataType $relationship
     * @var string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\ProductRelationshipDataType $relationship = null, string $reason = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ProductRelationshipDataType
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ProductRelationshipDataType $relationship
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


<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedProductRelationshipDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductRelationshipDataType
     */
    protected $relationship;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\ProductRelationshipDataType $relationship
     * @param string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\ProductRelationshipDataType $relationship = null, string $reason = null)
    {
        $this->relationship = $relationship;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\ProductRelationshipDataType $relationship
     * @param string $reason
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

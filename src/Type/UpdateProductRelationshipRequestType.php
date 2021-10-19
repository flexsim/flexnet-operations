<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateProductRelationshipRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateProductRelationshipDataType
     */
    protected $relationship;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\UpdateProductRelationshipDataType $relationship
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\UpdateProductRelationshipDataType $relationship)
    {
        $this->relationship = $relationship;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\UpdateProductRelationshipDataType $relationship
     */
    public static function create(\Flexsim\FlexnetOperations\Type\UpdateProductRelationshipDataType $relationship)
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
}

<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteProductRelationshipRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductRelationshipDataType|array<\Flexsim\FlexnetOperations\Type\ProductRelationshipDataType>
     */
    protected $relationship;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\ProductRelationshipDataType|array<\Flexsim\FlexnetOperations\Type\ProductRelationshipDataType> $relationship
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\ProductRelationshipDataType|array $relationship)
    {
        $this->relationship = $relationship;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\ProductRelationshipDataType|array<\Flexsim\FlexnetOperations\Type\ProductRelationshipDataType> $relationship
     */
    public static function create(\Flexsim\FlexnetOperations\Type\ProductRelationshipDataType|array $relationship)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ProductRelationshipDataType|array<\Flexsim\FlexnetOperations\Type\ProductRelationshipDataType>
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ProductRelationshipDataType|array<\Flexsim\FlexnetOperations\Type\ProductRelationshipDataType> $relationship
     * @return $this
     */
    public function setRelationship($relationship)
    {
        $this->relationship = $relationship;

        return $this;
    }
}

<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateProductRelationshipRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateProductRelationshipDataType|array<\Flexsim\FlexnetOperations\Type\UpdateProductRelationshipDataType>
     */
    protected $relationship;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\UpdateProductRelationshipDataType|array<\Flexsim\FlexnetOperations\Type\UpdateProductRelationshipDataType>  $relationship
     */
    public function __construct(UpdateProductRelationshipDataType|array $relationship)
    {
        $this->relationship = $relationship;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\UpdateProductRelationshipDataType|array<\Flexsim\FlexnetOperations\Type\UpdateProductRelationshipDataType>  $relationship
     */
    public static function create(UpdateProductRelationshipDataType|array $relationship)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateProductRelationshipDataTyp|array<\Flexsim\FlexnetOperations\Type\UpdateProductRelationshipDataType>e
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\UpdateProductRelationshipDataType|array<\Flexsim\FlexnetOperations\Type\UpdateProductRelationshipDataType>  $relationship
     * @return $this
     */
    public function setRelationship($relationship)
    {
        $this->relationship = $relationship;

        return $this;
    }
}

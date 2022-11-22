<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetProductRelationshipsResponseType extends FlexnetType implements ResultInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType
     */
    protected $statusInfo;

    /**
     * @var array<\Flexsim\FlexnetOperations\Type\ProductRelationshipDataType>|\Flexsim\FlexnetOperations\Type\ProductRelationshipDataType
     */
    protected $relationship;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\StatusInfoType  $statusInfo
     * @param  array<\Flexsim\FlexnetOperations\Type\ProductRelationshipDataType>|\Flexsim\FlexnetOperations\Type\ProductRelationshipDataType  $relationship
     */
    public function __construct(StatusInfoType $statusInfo, ProductRelationshipDataType|array $relationship)
    {
        $this->statusInfo = $statusInfo;
        $this->relationship = $relationship;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\StatusInfoType  $statusInfo
     * @param  array<\Flexsim\FlexnetOperations\Type\ProductRelationshipDataType>|\Flexsim\FlexnetOperations\Type\ProductRelationshipDataType  $relationship
     */
    public static function create(StatusInfoType $statusInfo, ProductRelationshipDataType|array $relationship)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\StatusInfoType
     */
    public function getStatusInfo()
    {
        return $this->statusInfo;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\StatusInfoType  $statusInfo
     * @return $this
     */
    public function setStatusInfo($statusInfo)
    {
        $this->statusInfo = $statusInfo;

        return $this;
    }

    /**
     * @return array<\Flexsim\FlexnetOperations\Type\ProductRelationshipDataType>|\Flexsim\FlexnetOperations\Type\ProductRelationshipDataType
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * @param  array<\Flexsim\FlexnetOperations\Type\ProductRelationshipDataType>|\Flexsim\FlexnetOperations\Type\ProductRelationshipDataType  $relationship
     * @return $this
     */
    public function setRelationship($relationship)
    {
        $this->relationship = $relationship;

        return $this;
    }
}

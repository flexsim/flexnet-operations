<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedMapEntitlementsToUserDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedIdDataType
     */
    private $failedId;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedIdDataType $failedId
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\FailedIdDataType $failedId)
    {
        $this->failedId = $failedId;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedIdDataType $failedId
     */
    public static function create(\Flexsim\FlexnetOperations\Type\FailedIdDataType $failedId)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedIdDataType
     */
    public function getFailedId()
    {
        return $this->failedId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedIdDataType $failedId
     * @return $this
     */
    public function setFailedId($failedId)
    {
        $this->failedId = $failedId;
        return $this;
    }


}


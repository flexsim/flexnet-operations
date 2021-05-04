<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedMapEntitlementsToUserDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedIdDataType|array 
     */
    private $failedId;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedIdDataType|array $failedId
     */
    public function __construct($failedId)
    {
        $this->failedId = $failedId;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedIdDataType|array $failedId
     */
    public static function create($failedId)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedIdDataType|array 
     */
    public function getFailedId()
    {
        return $this->failedId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedIdDataType|array $failedId
     * @return $this
     */
    public function setFailedId($failedId)
    {
        $this->failedId = $failedId;
        return $this;
    }
}

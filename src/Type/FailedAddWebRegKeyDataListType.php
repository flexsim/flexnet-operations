<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedAddWebRegKeyDataListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedAddWebRegKeyDataType|array
     */
    protected $failedWebRegKeyData;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedAddWebRegKeyDataType|array $failedWebRegKeyData
     */
    public function __construct($failedWebRegKeyData = null)
    {
        $this->failedWebRegKeyData = $failedWebRegKeyData;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedAddWebRegKeyDataType|array $failedWebRegKeyData
     */
    public static function create($failedWebRegKeyData = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedAddWebRegKeyDataType|array
     */
    public function getFailedWebRegKeyData()
    {
        return $this->failedWebRegKeyData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedAddWebRegKeyDataType|array $failedWebRegKeyData
     * @return $this
     */
    public function setFailedWebRegKeyData($failedWebRegKeyData)
    {
        $this->failedWebRegKeyData = $failedWebRegKeyData;

        return $this;
    }
}

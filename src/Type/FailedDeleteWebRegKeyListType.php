<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedDeleteWebRegKeyListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedDeleteWebRegKeyDataType
     */
    private $failedWebRegKey;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedDeleteWebRegKeyDataType|array $failedWebRegKey
     */
    public function __construct($failedWebRegKey = null)
    {
        $this->failedWebRegKey = $failedWebRegKey;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedDeleteWebRegKeyDataType|array $failedWebRegKey
     */
    public static function create($failedWebRegKey = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedDeleteWebRegKeyDataType
     */
    public function getFailedWebRegKey()
    {
        return $this->failedWebRegKey;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedDeleteWebRegKeyDataType $failedWebRegKey
     * @return $this
     */
    public function setFailedWebRegKey($failedWebRegKey)
    {
        $this->failedWebRegKey = $failedWebRegKey;
        return $this;
    }


}


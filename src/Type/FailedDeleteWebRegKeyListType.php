<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedDeleteWebRegKeyListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedDeleteWebRegKeyDataType|array
     */
    protected $failedWebRegKey;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedDeleteWebRegKeyDataType|array $failedWebRegKey
     */
    public function __construct($failedWebRegKey = null)
    {
        $this->failedWebRegKey = $failedWebRegKey;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedDeleteWebRegKeyDataType|array $failedWebRegKey
     */
    public static function create($failedWebRegKey = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedDeleteWebRegKeyDataType|array
     */
    public function getFailedWebRegKey()
    {
        return $this->failedWebRegKey;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedDeleteWebRegKeyDataType|array $failedWebRegKey
     * @return $this
     */
    public function setFailedWebRegKey($failedWebRegKey)
    {
        $this->failedWebRegKey = $failedWebRegKey;

        return $this;
    }
}

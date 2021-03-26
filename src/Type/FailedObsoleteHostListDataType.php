<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedObsoleteHostListDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedObsoleteHostDataType
     */
    private $failedHost;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedObsoleteHostDataType|array $failedHost
     */
    public function __construct($failedHost = null)
    {
        $this->failedHost = $failedHost;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedObsoleteHostDataType|array $failedHost
     */
    public static function create($failedHost = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedObsoleteHostDataType
     */
    public function getFailedHost()
    {
        return $this->failedHost;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedObsoleteHostDataType $failedHost
     * @return $this
     */
    public function setFailedHost($failedHost)
    {
        $this->failedHost = $failedHost;
        return $this;
    }


}


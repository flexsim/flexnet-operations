<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedTransferHostListDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedTransferHostDataType
     */
    private $failedHost;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedTransferHostDataType|array $failedHost
     */
    public function __construct($failedHost = null)
    {
        $this->failedHost = $failedHost;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedTransferHostDataType|array $failedHost
     */
    public static function create($failedHost = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedTransferHostDataType
     */
    public function getFailedHost()
    {
        return $this->failedHost;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedTransferHostDataType $failedHost
     * @return $this
     */
    public function setFailedHost($failedHost)
    {
        $this->failedHost = $failedHost;
        return $this;
    }


}


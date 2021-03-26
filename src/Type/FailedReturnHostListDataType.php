<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedReturnHostListDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedReturnHostDataType
     */
    private $failedHost;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedReturnHostDataType|array $failedHost
     */
    public function __construct($failedHost = null)
    {
        $this->failedHost = $failedHost;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedReturnHostDataType|array $failedHost
     */
    public static function create($failedHost = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedReturnHostDataType
     */
    public function getFailedHost()
    {
        return $this->failedHost;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedReturnHostDataType $failedHost
     * @return $this
     */
    public function setFailedHost($failedHost)
    {
        $this->failedHost = $failedHost;
        return $this;
    }


}

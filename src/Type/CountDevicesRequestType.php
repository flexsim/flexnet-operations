<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CountDevicesRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\SearchDevicesParametersType
     */
    private $queryParams;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\SearchDevicesParametersType $queryParams
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\SearchDevicesParametersType $queryParams = null)
    {
        $this->queryParams = $queryParams;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\SearchDevicesParametersType $queryParams
     */
    public static function create(\Flexsim\FlexnetOperations\Type\SearchDevicesParametersType $queryParams = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SearchDevicesParametersType
     */
    public function getQueryParams()
    {
        return $this->queryParams;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SearchDevicesParametersType $queryParams
     * @return $this
     */
    public function setQueryParams($queryParams)
    {
        $this->queryParams = $queryParams;
        return $this;
    }


}


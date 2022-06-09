<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetDevicesCountRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\GetDevicesParametersType|\Flexsim\FlexnetOperations\Type\v2GetDevicesParametersType
     */
    protected $queryParams;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\GetDevicesParametersType|\Flexsim\FlexnetOperations\Type\v2GetDevicesParametersType $queryParams
     */
    public function __construct($queryParams = null)
    {
        $queryParams = $queryParams ?? [];
        $this->queryParams = $queryParams;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\GetDevicesParametersType|\Flexsim\FlexnetOperations\Type\v2GetDevicesParametersType $queryParams
     */
    public static function create($queryParams = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\GetDevicesParametersType|\Flexsim\FlexnetOperations\Type\v2GetDevicesParametersType
     */
    public function getQueryParams()
    {
        return $this->queryParams;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\GetDevicesParametersType|\Flexsim\FlexnetOperations\Type\v2GetDevicesParametersType $queryParams
     * @return $this
     */
    public function setQueryParams($queryParams)
    {
        $this->queryParams = $queryParams;

        return $this;
    }
}

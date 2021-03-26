<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetFeatureCountRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureQueryParametersType
     */
    private $queryParams;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureQueryParametersType $queryParams
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\FeatureQueryParametersType $queryParams = null)
    {
        $this->queryParams = $queryParams;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureQueryParametersType $queryParams
     */
    public static function create(\Flexsim\FlexnetOperations\Type\FeatureQueryParametersType $queryParams = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FeatureQueryParametersType
     */
    public function getQueryParams()
    {
        return $this->queryParams;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FeatureQueryParametersType $queryParams
     * @return $this
     */
    public function setQueryParams($queryParams)
    {
        $this->queryParams = $queryParams;
        return $this;
    }


}


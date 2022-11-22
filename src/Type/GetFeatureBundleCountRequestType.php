<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetFeatureBundleCountRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundleQueryParametersType
     */
    protected $queryParams;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\FeatureBundleQueryParametersType  $queryParams
     */
    public function __construct(FeatureBundleQueryParametersType $queryParams = null)
    {
        $queryParams = $queryParams ?? [];
        $this->queryParams = $queryParams;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\FeatureBundleQueryParametersType  $queryParams
     */
    public static function create(FeatureBundleQueryParametersType $queryParams = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FeatureBundleQueryParametersType
     */
    public function getQueryParams()
    {
        return $this->queryParams;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\FeatureBundleQueryParametersType  $queryParams
     * @return $this
     */
    public function setQueryParams($queryParams)
    {
        $this->queryParams = $queryParams;

        return $this;
    }
}

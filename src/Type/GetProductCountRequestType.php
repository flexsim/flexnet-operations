<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetProductCountRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductQueryParametersType
     */
    protected $queryParams;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\ProductQueryParametersType $queryParams
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\ProductQueryParametersType $queryParams = null)
    {
        $queryParams = $queryParams ?? [];
        $this->queryParams = $queryParams;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\ProductQueryParametersType $queryParams
     */
    public static function create(\Flexsim\FlexnetOperations\Type\ProductQueryParametersType $queryParams = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ProductQueryParametersType
     */
    public function getQueryParams()
    {
        return $this->queryParams;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ProductQueryParametersType $queryParams
     * @return $this
     */
    public function setQueryParams($queryParams)
    {
        $this->queryParams = $queryParams;
        return $this;
    }
}

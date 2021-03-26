<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetPartNumberCountRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\PartNumberQueryParametersType
     */
    private $queryParams;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\PartNumberQueryParametersType $queryParams
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\PartNumberQueryParametersType $queryParams = null)
    {
        $this->queryParams = $queryParams;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\PartNumberQueryParametersType $queryParams
     */
    public static function create(\Flexsim\FlexnetOperations\Type\PartNumberQueryParametersType $queryParams = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\PartNumberQueryParametersType
     */
    public function getQueryParams()
    {
        return $this->queryParams;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\PartNumberQueryParametersType $queryParams
     * @return $this
     */
    public function setQueryParams($queryParams)
    {
        $this->queryParams = $queryParams;
        return $this;
    }


}


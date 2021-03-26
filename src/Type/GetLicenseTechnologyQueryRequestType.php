<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetLicenseTechnologyQueryRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseTechnologyQueryParametersType
     */
    private $queryParams;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\LicenseTechnologyQueryParametersType $queryParams
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\LicenseTechnologyQueryParametersType $queryParams = null)
    {
        $this->queryParams = $queryParams;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\LicenseTechnologyQueryParametersType $queryParams
     */
    public static function create(\Flexsim\FlexnetOperations\Type\LicenseTechnologyQueryParametersType $queryParams = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LicenseTechnologyQueryParametersType
     */
    public function getQueryParams()
    {
        return $this->queryParams;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LicenseTechnologyQueryParametersType $queryParams
     * @return $this
     */
    public function setQueryParams($queryParams)
    {
        $this->queryParams = $queryParams;
        return $this;
    }


}


<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetLicenseTechnologyQueryRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseTechnologyQueryParametersType
     */
    protected $queryParams;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\LicenseTechnologyQueryParametersType  $queryParams
     */
    public function __construct(LicenseTechnologyQueryParametersType $queryParams = null)
    {
        $queryParams = $queryParams ?? [];
        $this->queryParams = $queryParams;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\LicenseTechnologyQueryParametersType  $queryParams
     */
    public static function create(LicenseTechnologyQueryParametersType $queryParams = null)
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
     * @param  \Flexsim\FlexnetOperations\Type\LicenseTechnologyQueryParametersType  $queryParams
     * @return $this
     */
    public function setQueryParams($queryParams)
    {
        $this->queryParams = $queryParams;

        return $this;
    }
}

<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetOrganizationCountRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\OrganizationQueryParametersType
     */
    protected $queryParams;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\OrganizationQueryParametersType $queryParams
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\OrganizationQueryParametersType $queryParams = null)
    {
        $queryParams = $queryParams ?? [];
        $this->queryParams = $queryParams;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\OrganizationQueryParametersType $queryParams
     */
    public static function create(\Flexsim\FlexnetOperations\Type\OrganizationQueryParametersType $queryParams = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\OrganizationQueryParametersType
     */
    public function getQueryParams()
    {
        return $this->queryParams;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\OrganizationQueryParametersType $queryParams
     * @return $this
     */
    public function setQueryParams($queryParams)
    {
        $this->queryParams = $queryParams;
        return $this;
    }
}

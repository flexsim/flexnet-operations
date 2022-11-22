<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetEntitlementCountRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\SearchEntitlementDataType
     */
    protected $queryParams;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\SearchEntitlementDataType  $queryParams
     */
    public function __construct(SearchEntitlementDataType $queryParams)
    {
        $this->queryParams = $queryParams;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\SearchEntitlementDataType  $queryParams
     */
    public static function create(SearchEntitlementDataType $queryParams)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SearchEntitlementDataType
     */
    public function getQueryParams()
    {
        return $this->queryParams;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\SearchEntitlementDataType  $queryParams
     * @return $this
     */
    public function setQueryParams($queryParams)
    {
        $this->queryParams = $queryParams;

        return $this;
    }
}

<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetFulfillmentCountRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentsQueryParametersType
     */
    private $queryParams;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentsQueryParametersType $queryParams
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\FulfillmentsQueryParametersType $queryParams = null)
    {
        $this->queryParams = $queryParams;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentsQueryParametersType $queryParams
     */
    public static function create(\Flexsim\FlexnetOperations\Type\FulfillmentsQueryParametersType $queryParams = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FulfillmentsQueryParametersType
     */
    public function getQueryParams()
    {
        return $this->queryParams;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FulfillmentsQueryParametersType $queryParams
     * @return $this
     */
    public function setQueryParams($queryParams)
    {
        $this->queryParams = $queryParams;
        return $this;
    }


}


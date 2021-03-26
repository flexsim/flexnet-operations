<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetConsolidatedFulfillmentCountRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\ConsolidatedFulfillmentsQPType
     */
    private $queryParams;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\ConsolidatedFulfillmentsQPType $queryParams
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\ConsolidatedFulfillmentsQPType $queryParams = null)
    {
        $this->queryParams = $queryParams;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\ConsolidatedFulfillmentsQPType $queryParams
     */
    public static function create(\Flexsim\FlexnetOperations\Type\ConsolidatedFulfillmentsQPType $queryParams = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ConsolidatedFulfillmentsQPType
     */
    public function getQueryParams()
    {
        return $this->queryParams;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ConsolidatedFulfillmentsQPType $queryParams
     * @return $this
     */
    public function setQueryParams($queryParams)
    {
        $this->queryParams = $queryParams;
        return $this;
    }


}


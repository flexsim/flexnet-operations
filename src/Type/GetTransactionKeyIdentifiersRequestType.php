<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetTransactionKeyIdentifiersRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\IdentifierQueryParametersType
     */
    protected $queryParams;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\IdentifierQueryParametersType $queryParams
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\IdentifierQueryParametersType $queryParams = null)
    {
        $queryParams = $queryParams ?? [];
        $this->queryParams = $queryParams;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\IdentifierQueryParametersType $queryParams
     */
    public static function create(\Flexsim\FlexnetOperations\Type\IdentifierQueryParametersType $queryParams = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\IdentifierQueryParametersType
     */
    public function getQueryParams()
    {
        return $this->queryParams;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\IdentifierQueryParametersType $queryParams
     * @return $this
     */
    public function setQueryParams($queryParams)
    {
        $this->queryParams = $queryParams;
        return $this;
    }
}

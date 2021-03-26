<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetActivatableItemCountRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\SearchActivatableItemDataType
     */
    private $queryParams;

    /**
     * @var bool
     */
    private $restrictToItemsReadyToActivate;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\SearchActivatableItemDataType $queryParams
     * @var bool $restrictToItemsReadyToActivate
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\SearchActivatableItemDataType $queryParams, bool $restrictToItemsReadyToActivate = null)
    {
        $this->queryParams = $queryParams;
        $this->restrictToItemsReadyToActivate = $restrictToItemsReadyToActivate;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\SearchActivatableItemDataType $queryParams
     * @var bool $restrictToItemsReadyToActivate
     */
    public static function create(\Flexsim\FlexnetOperations\Type\SearchActivatableItemDataType $queryParams, bool $restrictToItemsReadyToActivate = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SearchActivatableItemDataType
     */
    public function getQueryParams()
    {
        return $this->queryParams;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SearchActivatableItemDataType $queryParams
     * @return $this
     */
    public function setQueryParams($queryParams)
    {
        $this->queryParams = $queryParams;
        return $this;
    }

    /**
     * @return bool
     */
    public function getRestrictToItemsReadyToActivate()
    {
        return $this->restrictToItemsReadyToActivate;
    }

    /**
     * @param bool $restrictToItemsReadyToActivate
     * @return $this
     */
    public function setRestrictToItemsReadyToActivate($restrictToItemsReadyToActivate)
    {
        $this->restrictToItemsReadyToActivate = $restrictToItemsReadyToActivate;
        return $this;
    }


}


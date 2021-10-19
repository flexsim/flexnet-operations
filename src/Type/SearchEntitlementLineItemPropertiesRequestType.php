<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SearchEntitlementLineItemPropertiesRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\SearchActivatableItemDataType
     */
    protected $queryParams;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemResponseConfigRequestType
     */
    protected $entitlementLineItemResponseConfig;

    /**
     * @var int
     */
    protected $batchSize;

    /**
     * @var int
     */
    protected $pageNumber;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\SearchActivatableItemDataType $queryParams
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemResponseConfigRequestType $entitlementLineItemResponseConfig
     * @param int $batchSize
     * @param int $pageNumber
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\SearchActivatableItemDataType $queryParams, \Flexsim\FlexnetOperations\Type\EntitlementLineItemResponseConfigRequestType $entitlementLineItemResponseConfig, int $batchSize, int $pageNumber = null)
    {
        $this->queryParams = $queryParams;
        $this->entitlementLineItemResponseConfig = $entitlementLineItemResponseConfig;
        $this->batchSize = $batchSize;
        $this->pageNumber = $pageNumber;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\SearchActivatableItemDataType $queryParams
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemResponseConfigRequestType $entitlementLineItemResponseConfig
     * @param int $batchSize
     * @param int $pageNumber
     */
    public static function create(\Flexsim\FlexnetOperations\Type\SearchActivatableItemDataType $queryParams, \Flexsim\FlexnetOperations\Type\EntitlementLineItemResponseConfigRequestType $entitlementLineItemResponseConfig, int $batchSize, int $pageNumber = null)
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
     * @return \Flexsim\FlexnetOperations\Type\EntitlementLineItemResponseConfigRequestType
     */
    public function getEntitlementLineItemResponseConfig()
    {
        return $this->entitlementLineItemResponseConfig;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemResponseConfigRequestType $entitlementLineItemResponseConfig
     * @return $this
     */
    public function setEntitlementLineItemResponseConfig($entitlementLineItemResponseConfig)
    {
        $this->entitlementLineItemResponseConfig = $entitlementLineItemResponseConfig;
        return $this;
    }

    /**
     * @return int
     */
    public function getBatchSize()
    {
        return $this->batchSize;
    }

    /**
     * @param int $batchSize
     * @return $this
     */
    public function setBatchSize($batchSize)
    {
        $this->batchSize = $batchSize;
        return $this;
    }

    /**
     * @return int
     */
    public function getPageNumber()
    {
        return $this->pageNumber;
    }

    /**
     * @param int $pageNumber
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->pageNumber = $pageNumber;
        return $this;
    }
}

<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SearchEntitlementMaintenanceLineItemPropertiesRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\SearchMaintenanceLineItemDataType
     */
    protected $queryParams;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementMaintenanceLineItemResponseConfigRequestType
     */
    protected $entitlementMaintenanceLineItemResponseConfig;

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
     * @param  \Flexsim\FlexnetOperations\Type\SearchMaintenanceLineItemDataType  $queryParams
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementMaintenanceLineItemResponseConfigRequestType  $entitlementMaintenanceLineItemResponseConfig
     * @param  int  $batchSize
     * @param  int  $pageNumber
     */
    public function __construct(SearchMaintenanceLineItemDataType $queryParams, EntitlementMaintenanceLineItemResponseConfigRequestType $entitlementMaintenanceLineItemResponseConfig, int $batchSize, int $pageNumber = null)
    {
        $this->queryParams = $queryParams;
        $this->entitlementMaintenanceLineItemResponseConfig = $entitlementMaintenanceLineItemResponseConfig;
        $this->batchSize = $batchSize;
        $this->pageNumber = $pageNumber;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\SearchMaintenanceLineItemDataType  $queryParams
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementMaintenanceLineItemResponseConfigRequestType  $entitlementMaintenanceLineItemResponseConfig
     * @param  int  $batchSize
     * @param  int  $pageNumber
     */
    public static function create(SearchMaintenanceLineItemDataType $queryParams, EntitlementMaintenanceLineItemResponseConfigRequestType $entitlementMaintenanceLineItemResponseConfig, int $batchSize, int $pageNumber = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SearchMaintenanceLineItemDataType
     */
    public function getQueryParams()
    {
        return $this->queryParams;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\SearchMaintenanceLineItemDataType  $queryParams
     * @return $this
     */
    public function setQueryParams($queryParams)
    {
        $this->queryParams = $queryParams;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementMaintenanceLineItemResponseConfigRequestType
     */
    public function getEntitlementMaintenanceLineItemResponseConfig()
    {
        return $this->entitlementMaintenanceLineItemResponseConfig;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementMaintenanceLineItemResponseConfigRequestType  $entitlementMaintenanceLineItemResponseConfig
     * @return $this
     */
    public function setEntitlementMaintenanceLineItemResponseConfig($entitlementMaintenanceLineItemResponseConfig)
    {
        $this->entitlementMaintenanceLineItemResponseConfig = $entitlementMaintenanceLineItemResponseConfig;

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
     * @param  int  $batchSize
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
     * @param  int  $pageNumber
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->pageNumber = $pageNumber;

        return $this;
    }
}

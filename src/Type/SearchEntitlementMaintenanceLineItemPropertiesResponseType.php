<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SearchEntitlementMaintenanceLineItemPropertiesResponseType extends FlexnetType implements ResultInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType
     */
    protected $statusInfo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementMaintenanceLineItemPropertiesType
     */
    protected $entitlementMaintenanceLineItem;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo
     * @param \Flexsim\FlexnetOperations\Type\EntitlementMaintenanceLineItemPropertiesType|array $entitlementMaintenanceLineItem
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo, $entitlementMaintenanceLineItem = null)
    {
        $this->statusInfo = $statusInfo;
        $this->entitlementMaintenanceLineItem = $entitlementMaintenanceLineItem;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo
     * @param \Flexsim\FlexnetOperations\Type\EntitlementMaintenanceLineItemPropertiesType|array $entitlementMaintenanceLineItem
     */
    public static function create(\Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo, $entitlementMaintenanceLineItem = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\StatusInfoType
     */
    public function getStatusInfo()
    {
        return $this->statusInfo;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo
     * @return $this
     */
    public function setStatusInfo($statusInfo)
    {
        $this->statusInfo = $statusInfo;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementMaintenanceLineItemPropertiesType
     */
    public function getEntitlementMaintenanceLineItem()
    {
        return $this->entitlementMaintenanceLineItem;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementMaintenanceLineItemPropertiesType $entitlementMaintenanceLineItem
     * @return $this
     */
    public function setEntitlementMaintenanceLineItem($entitlementMaintenanceLineItem)
    {
        $this->entitlementMaintenanceLineItem = $entitlementMaintenanceLineItem;
        return $this;
    }
}

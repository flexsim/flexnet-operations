<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedUnlinkMaintenanceLineItemListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedUnlinkMaintenanceLineItemDataType|array 
     */
    private $failedUnlinkMaintenanceLineItem;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedUnlinkMaintenanceLineItemDataType|array $failedUnlinkMaintenanceLineItem
     */
    public function __construct($failedUnlinkMaintenanceLineItem = null)
    {
        $this->failedUnlinkMaintenanceLineItem = $failedUnlinkMaintenanceLineItem;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedUnlinkMaintenanceLineItemDataType|array $failedUnlinkMaintenanceLineItem
     */
    public static function create($failedUnlinkMaintenanceLineItem = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedUnlinkMaintenanceLineItemDataType|array 
     */
    public function getFailedUnlinkMaintenanceLineItem()
    {
        return $this->failedUnlinkMaintenanceLineItem;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedUnlinkMaintenanceLineItemDataType|array $failedUnlinkMaintenanceLineItem
     * @return $this
     */
    public function setFailedUnlinkMaintenanceLineItem($failedUnlinkMaintenanceLineItem)
    {
        $this->failedUnlinkMaintenanceLineItem = $failedUnlinkMaintenanceLineItem;
        return $this;
    }
}

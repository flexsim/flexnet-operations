<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedLinkMaintenanceLineItemListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedLinkMaintenanceLineItemDataType|array 
     */
    private $failedLinkMaintenanceLineItem;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedLinkMaintenanceLineItemDataType|array $failedLinkMaintenanceLineItem
     */
    public function __construct($failedLinkMaintenanceLineItem = null)
    {
        $this->failedLinkMaintenanceLineItem = $failedLinkMaintenanceLineItem;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedLinkMaintenanceLineItemDataType|array $failedLinkMaintenanceLineItem
     */
    public static function create($failedLinkMaintenanceLineItem = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedLinkMaintenanceLineItemDataType|array 
     */
    public function getFailedLinkMaintenanceLineItem()
    {
        return $this->failedLinkMaintenanceLineItem;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedLinkMaintenanceLineItemDataType|array $failedLinkMaintenanceLineItem
     * @return $this
     */
    public function setFailedLinkMaintenanceLineItem($failedLinkMaintenanceLineItem)
    {
        $this->failedLinkMaintenanceLineItem = $failedLinkMaintenanceLineItem;
        return $this;
    }
}

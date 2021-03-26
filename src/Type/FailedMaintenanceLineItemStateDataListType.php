<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedMaintenanceLineItemStateDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedMaintenanceLineItemStateDataType
     */
    private $failedMaintenanceLineItem;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedMaintenanceLineItemStateDataType|array $failedMaintenanceLineItem
     */
    public function __construct($failedMaintenanceLineItem = null)
    {
        $this->failedMaintenanceLineItem = $failedMaintenanceLineItem;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedMaintenanceLineItemStateDataType|array $failedMaintenanceLineItem
     */
    public static function create($failedMaintenanceLineItem = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedMaintenanceLineItemStateDataType
     */
    public function getFailedMaintenanceLineItem()
    {
        return $this->failedMaintenanceLineItem;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedMaintenanceLineItemStateDataType $failedMaintenanceLineItem
     * @return $this
     */
    public function setFailedMaintenanceLineItem($failedMaintenanceLineItem)
    {
        $this->failedMaintenanceLineItem = $failedMaintenanceLineItem;
        return $this;
    }


}


<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedMaintenanceLineItemStateDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\MaintenanceLineItemStateDataType
     */
    private $maintenanceLineItem;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\MaintenanceLineItemStateDataType $maintenanceLineItem
     * @var string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\MaintenanceLineItemStateDataType $maintenanceLineItem, string $reason)
    {
        $this->maintenanceLineItem = $maintenanceLineItem;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\MaintenanceLineItemStateDataType $maintenanceLineItem
     * @var string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\MaintenanceLineItemStateDataType $maintenanceLineItem, string $reason)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\MaintenanceLineItemStateDataType
     */
    public function getMaintenanceLineItem()
    {
        return $this->maintenanceLineItem;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\MaintenanceLineItemStateDataType $maintenanceLineItem
     * @return $this
     */
    public function setMaintenanceLineItem($maintenanceLineItem)
    {
        $this->maintenanceLineItem = $maintenanceLineItem;
        return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }


}


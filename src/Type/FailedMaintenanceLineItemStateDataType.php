<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedMaintenanceLineItemStateDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\MaintenanceLineItemStateDataType
     */
    protected $maintenanceLineItem;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\MaintenanceLineItemStateDataType $maintenanceLineItem
     * @param string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\MaintenanceLineItemStateDataType $maintenanceLineItem, string $reason)
    {
        $this->maintenanceLineItem = $maintenanceLineItem;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\MaintenanceLineItemStateDataType $maintenanceLineItem
     * @param string $reason
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

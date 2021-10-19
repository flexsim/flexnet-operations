<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetMaintenanceLineItemStateRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\MaintenanceLineItemStateDataType
     */
    protected $maintenanceLineItem;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\MaintenanceLineItemStateDataType $maintenanceLineItem
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\MaintenanceLineItemStateDataType $maintenanceLineItem)
    {
        $this->maintenanceLineItem = $maintenanceLineItem;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\MaintenanceLineItemStateDataType $maintenanceLineItem
     */
    public static function create(\Flexsim\FlexnetOperations\Type\MaintenanceLineItemStateDataType $maintenanceLineItem)
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
}

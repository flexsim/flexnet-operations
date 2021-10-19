<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteMaintenanceLineItemRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeleteMaintenanceLineItemDataType
     */
    protected $maintenanceLineItemData;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\DeleteMaintenanceLineItemDataType $maintenanceLineItemData
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\DeleteMaintenanceLineItemDataType $maintenanceLineItemData)
    {
        $this->maintenanceLineItemData = $maintenanceLineItemData;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\DeleteMaintenanceLineItemDataType $maintenanceLineItemData
     */
    public static function create(\Flexsim\FlexnetOperations\Type\DeleteMaintenanceLineItemDataType $maintenanceLineItemData)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeleteMaintenanceLineItemDataType
     */
    public function getMaintenanceLineItemData()
    {
        return $this->maintenanceLineItemData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeleteMaintenanceLineItemDataType $maintenanceLineItemData
     * @return $this
     */
    public function setMaintenanceLineItemData($maintenanceLineItemData)
    {
        $this->maintenanceLineItemData = $maintenanceLineItemData;
        return $this;
    }
}

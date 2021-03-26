<?php

namespace Flexsim\FlexnetOperations\Type;

class UnlinkMaintenanceLineItemListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UnlinkMaintenanceLineItemDataType
     */
    private $unlinkMaintenanceLineItem;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UnlinkMaintenanceLineItemDataType $unlinkMaintenanceLineItem
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\UnlinkMaintenanceLineItemDataType $unlinkMaintenanceLineItem)
    {
        $this->unlinkMaintenanceLineItem = $unlinkMaintenanceLineItem;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UnlinkMaintenanceLineItemDataType $unlinkMaintenanceLineItem
     */
    public static function create(\Flexsim\FlexnetOperations\Type\UnlinkMaintenanceLineItemDataType $unlinkMaintenanceLineItem)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UnlinkMaintenanceLineItemDataType
     */
    public function getUnlinkMaintenanceLineItem()
    {
        return $this->unlinkMaintenanceLineItem;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UnlinkMaintenanceLineItemDataType $unlinkMaintenanceLineItem
     * @return $this
     */
    public function setUnlinkMaintenanceLineItem($unlinkMaintenanceLineItem)
    {
        $this->unlinkMaintenanceLineItem = $unlinkMaintenanceLineItem;
        return $this;
    }


}


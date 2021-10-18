<?php

namespace Flexsim\FlexnetOperations\Type;

class UnlinkMaintenanceLineItemListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UnlinkMaintenanceLineItemDataType|array 
     */
    protected $unlinkMaintenanceLineItem;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UnlinkMaintenanceLineItemDataType|array $unlinkMaintenanceLineItem
     */
    public function __construct($unlinkMaintenanceLineItem)
    {
        $this->unlinkMaintenanceLineItem = $unlinkMaintenanceLineItem;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UnlinkMaintenanceLineItemDataType|array $unlinkMaintenanceLineItem
     */
    public static function create($unlinkMaintenanceLineItem)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UnlinkMaintenanceLineItemDataType|array 
     */
    public function getUnlinkMaintenanceLineItem()
    {
        return $this->unlinkMaintenanceLineItem;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UnlinkMaintenanceLineItemDataType|array $unlinkMaintenanceLineItem
     * @return $this
     */
    public function setUnlinkMaintenanceLineItem($unlinkMaintenanceLineItem)
    {
        $this->unlinkMaintenanceLineItem = $unlinkMaintenanceLineItem;
        return $this;
    }
}

<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UnlinkMaintenanceLineItemRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UnlinkMaintenanceLineItemListType
     */
    protected $unlinkMaintenanceLineItemList;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UnlinkMaintenanceLineItemListType $unlinkMaintenanceLineItemList
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\UnlinkMaintenanceLineItemListType $unlinkMaintenanceLineItemList)
    {
        $this->unlinkMaintenanceLineItemList = $unlinkMaintenanceLineItemList;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UnlinkMaintenanceLineItemListType $unlinkMaintenanceLineItemList
     */
    public static function create(\Flexsim\FlexnetOperations\Type\UnlinkMaintenanceLineItemListType $unlinkMaintenanceLineItemList)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UnlinkMaintenanceLineItemListType
     */
    public function getUnlinkMaintenanceLineItemList()
    {
        return $this->unlinkMaintenanceLineItemList;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UnlinkMaintenanceLineItemListType $unlinkMaintenanceLineItemList
     * @return $this
     */
    public function setUnlinkMaintenanceLineItemList($unlinkMaintenanceLineItemList)
    {
        $this->unlinkMaintenanceLineItemList = $unlinkMaintenanceLineItemList;
        return $this;
    }
}

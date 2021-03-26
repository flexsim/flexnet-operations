<?php

namespace Flexsim\FlexnetOperations\Type;

class LinkMaintenanceLineItemListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\LinkMaintenanceLineItemDataType
     */
    private $linkMaintenanceLineItem;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\LinkMaintenanceLineItemDataType $linkMaintenanceLineItem
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\LinkMaintenanceLineItemDataType $linkMaintenanceLineItem)
    {
        $this->linkMaintenanceLineItem = $linkMaintenanceLineItem;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\LinkMaintenanceLineItemDataType $linkMaintenanceLineItem
     */
    public static function create(\Flexsim\FlexnetOperations\Type\LinkMaintenanceLineItemDataType $linkMaintenanceLineItem)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LinkMaintenanceLineItemDataType
     */
    public function getLinkMaintenanceLineItem()
    {
        return $this->linkMaintenanceLineItem;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LinkMaintenanceLineItemDataType $linkMaintenanceLineItem
     * @return $this
     */
    public function setLinkMaintenanceLineItem($linkMaintenanceLineItem)
    {
        $this->linkMaintenanceLineItem = $linkMaintenanceLineItem;
        return $this;
    }


}


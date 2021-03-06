<?php

namespace Flexsim\FlexnetOperations\Type;

class LinkMaintenanceLineItemListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\LinkMaintenanceLineItemDataType|array
     */
    protected $linkMaintenanceLineItem;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\LinkMaintenanceLineItemDataType|array $linkMaintenanceLineItem
     */
    public function __construct($linkMaintenanceLineItem)
    {
        $this->linkMaintenanceLineItem = $linkMaintenanceLineItem;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\LinkMaintenanceLineItemDataType|array $linkMaintenanceLineItem
     */
    public static function create($linkMaintenanceLineItem)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LinkMaintenanceLineItemDataType|array
     */
    public function getLinkMaintenanceLineItem()
    {
        return $this->linkMaintenanceLineItem;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LinkMaintenanceLineItemDataType|array $linkMaintenanceLineItem
     * @return $this
     */
    public function setLinkMaintenanceLineItem($linkMaintenanceLineItem)
    {
        $this->linkMaintenanceLineItem = $linkMaintenanceLineItem;

        return $this;
    }
}

<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class LinkMaintenanceLineItemRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\LinkMaintenanceLineItemListType
     */
    private $linkMaintenanceLineItemList;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\LinkMaintenanceLineItemListType $linkMaintenanceLineItemList
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\LinkMaintenanceLineItemListType $linkMaintenanceLineItemList)
    {
        $this->linkMaintenanceLineItemList = $linkMaintenanceLineItemList;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\LinkMaintenanceLineItemListType $linkMaintenanceLineItemList
     */
    public static function create(\Flexsim\FlexnetOperations\Type\LinkMaintenanceLineItemListType $linkMaintenanceLineItemList)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LinkMaintenanceLineItemListType
     */
    public function getLinkMaintenanceLineItemList()
    {
        return $this->linkMaintenanceLineItemList;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LinkMaintenanceLineItemListType $linkMaintenanceLineItemList
     * @return $this
     */
    public function setLinkMaintenanceLineItemList($linkMaintenanceLineItemList)
    {
        $this->linkMaintenanceLineItemList = $linkMaintenanceLineItemList;
        return $this;
    }


}


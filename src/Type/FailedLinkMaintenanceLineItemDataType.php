<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedLinkMaintenanceLineItemDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\LinkMaintenanceLineItemDataType
     */
    private $linkMaintenanceLineItem;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\LinkMaintenanceLineItemDataType $linkMaintenanceLineItem
     * @var string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\LinkMaintenanceLineItemDataType $linkMaintenanceLineItem, string $reason)
    {
        $this->linkMaintenanceLineItem = $linkMaintenanceLineItem;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\LinkMaintenanceLineItemDataType $linkMaintenanceLineItem
     * @var string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\LinkMaintenanceLineItemDataType $linkMaintenanceLineItem, string $reason)
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


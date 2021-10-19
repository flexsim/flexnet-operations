<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedLinkMaintenanceLineItemDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\LinkMaintenanceLineItemDataType
     */
    protected $linkMaintenanceLineItem;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\LinkMaintenanceLineItemDataType $linkMaintenanceLineItem
     * @param string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\LinkMaintenanceLineItemDataType $linkMaintenanceLineItem, string $reason)
    {
        $this->linkMaintenanceLineItem = $linkMaintenanceLineItem;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\LinkMaintenanceLineItemDataType $linkMaintenanceLineItem
     * @param string $reason
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

<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedUnlinkMaintenanceLineItemDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UnlinkMaintenanceLineItemDataType
     */
    private $unlinkMaintenanceLineItem;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UnlinkMaintenanceLineItemDataType $unlinkMaintenanceLineItem
     * @var string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\UnlinkMaintenanceLineItemDataType $unlinkMaintenanceLineItem = null, string $reason = null)
    {
        $this->unlinkMaintenanceLineItem = $unlinkMaintenanceLineItem;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UnlinkMaintenanceLineItemDataType $unlinkMaintenanceLineItem
     * @var string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\UnlinkMaintenanceLineItemDataType $unlinkMaintenanceLineItem = null, string $reason = null)
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

<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedRemoveEntitlementLineItemDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\RemoveEntitlementLineItemDataType
     */
    protected $failedData;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\RemoveEntitlementLineItemDataType $failedData
     * @param string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\RemoveEntitlementLineItemDataType $failedData = null, string $reason = null)
    {
        $this->failedData = $failedData;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\RemoveEntitlementLineItemDataType $failedData
     * @param string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\RemoveEntitlementLineItemDataType $failedData = null, string $reason = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\RemoveEntitlementLineItemDataType
     */
    public function getFailedData()
    {
        return $this->failedData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\RemoveEntitlementLineItemDataType $failedData
     * @return $this
     */
    public function setFailedData($failedData)
    {
        $this->failedData = $failedData;

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

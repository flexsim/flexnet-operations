<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedRemoveEntitlementLineItemDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\RemoveEntitlementLineItemDataType
     */
    private $failedData;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\RemoveEntitlementLineItemDataType $failedData
     * @var string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\RemoveEntitlementLineItemDataType $failedData = null, string $reason = null)
    {
        $this->failedData = $failedData;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\RemoveEntitlementLineItemDataType $failedData
     * @var string $reason
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


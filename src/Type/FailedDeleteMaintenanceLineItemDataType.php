<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedDeleteMaintenanceLineItemDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeleteMaintenanceLineItemDataType
     */
    protected $failedData;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\DeleteMaintenanceLineItemDataType $failedData
     * @param string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\DeleteMaintenanceLineItemDataType $failedData = null, string $reason = null)
    {
        $this->failedData = $failedData;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\DeleteMaintenanceLineItemDataType $failedData
     * @param string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\DeleteMaintenanceLineItemDataType $failedData = null, string $reason = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeleteMaintenanceLineItemDataType
     */
    public function getFailedData()
    {
        return $this->failedData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeleteMaintenanceLineItemDataType $failedData
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

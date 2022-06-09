<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedDeleteMaintenanceLineItemDataListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedDeleteMaintenanceLineItemDataType|array
     */
    protected $failedData;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedDeleteMaintenanceLineItemDataType|array $failedData
     */
    public function __construct($failedData = null)
    {
        $this->failedData = $failedData;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedDeleteMaintenanceLineItemDataType|array $failedData
     */
    public static function create($failedData = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedDeleteMaintenanceLineItemDataType|array
     */
    public function getFailedData()
    {
        return $this->failedData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedDeleteMaintenanceLineItemDataType|array $failedData
     * @return $this
     */
    public function setFailedData($failedData)
    {
        $this->failedData = $failedData;

        return $this;
    }
}

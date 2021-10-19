<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedUpdateEntitlementLineItemDataListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedUpdateEntitlementLineItemDataType|array 
     */
    protected $failedData;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedUpdateEntitlementLineItemDataType|array $failedData
     */
    public function __construct($failedData = null)
    {
        $this->failedData = $failedData;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedUpdateEntitlementLineItemDataType|array $failedData
     */
    public static function create($failedData = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedUpdateEntitlementLineItemDataType|array 
     */
    public function getFailedData()
    {
        return $this->failedData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedUpdateEntitlementLineItemDataType|array $failedData
     * @return $this
     */
    public function setFailedData($failedData)
    {
        $this->failedData = $failedData;
        return $this;
    }
}

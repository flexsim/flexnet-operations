<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedRemoveEntitlementLineItemDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedRemoveEntitlementLineItemDataType
     */
    private $failedData;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedRemoveEntitlementLineItemDataType|array $failedData
     */
    public function __construct($failedData = null)
    {
        $this->failedData = $failedData;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedRemoveEntitlementLineItemDataType|array $failedData
     */
    public static function create($failedData = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedRemoveEntitlementLineItemDataType
     */
    public function getFailedData()
    {
        return $this->failedData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedRemoveEntitlementLineItemDataType $failedData
     * @return $this
     */
    public function setFailedData($failedData)
    {
        $this->failedData = $failedData;
        return $this;
    }


}


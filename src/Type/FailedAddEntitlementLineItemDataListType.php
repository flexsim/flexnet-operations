<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedAddEntitlementLineItemDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedAddEntitlementLineItemDataType
     */
    private $failedLineItemData;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedAddEntitlementLineItemDataType|array $failedLineItemData
     */
    public function __construct($failedLineItemData = null)
    {
        $this->failedLineItemData = $failedLineItemData;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedAddEntitlementLineItemDataType|array $failedLineItemData
     */
    public static function create($failedLineItemData = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedAddEntitlementLineItemDataType
     */
    public function getFailedLineItemData()
    {
        return $this->failedLineItemData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedAddEntitlementLineItemDataType $failedLineItemData
     * @return $this
     */
    public function setFailedLineItemData($failedLineItemData)
    {
        $this->failedLineItemData = $failedLineItemData;
        return $this;
    }


}


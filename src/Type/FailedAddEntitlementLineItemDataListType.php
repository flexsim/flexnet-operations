<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedAddEntitlementLineItemDataListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedAddEntitlementLineItemDataType|array
     */
    protected $failedLineItemData;

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
     * @return \Flexsim\FlexnetOperations\Type\FailedAddEntitlementLineItemDataType|array
     */
    public function getFailedLineItemData()
    {
        return $this->failedLineItemData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedAddEntitlementLineItemDataType|array $failedLineItemData
     * @return $this
     */
    public function setFailedLineItemData($failedLineItemData)
    {
        $this->failedLineItemData = $failedLineItemData;
        return $this;
    }
}

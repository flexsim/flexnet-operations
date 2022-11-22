<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedRemoveEntitlementLineItemDataListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedRemoveEntitlementLineItemDataType|array
     */
    protected $failedData;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\FailedRemoveEntitlementLineItemDataType|array  $failedData
     */
    public function __construct($failedData = null)
    {
        $this->failedData = $failedData;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\FailedRemoveEntitlementLineItemDataType|array  $failedData
     */
    public static function create($failedData = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedRemoveEntitlementLineItemDataType|array
     */
    public function getFailedData()
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\FailedRemoveEntitlementLineItemDataType|array  $failedData
     * @return $this
     */
    public function setFailedData($failedData)
    {
        $this->failedData = $failedData;

        return $this;
    }
}

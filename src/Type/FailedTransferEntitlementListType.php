<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedTransferEntitlementListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedTransferEntitlementDataType|array 
     */
    protected $failedEntitlement;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedTransferEntitlementDataType|array $failedEntitlement
     */
    public function __construct($failedEntitlement)
    {
        $this->failedEntitlement = $failedEntitlement;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedTransferEntitlementDataType|array $failedEntitlement
     */
    public static function create($failedEntitlement)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedTransferEntitlementDataType|array 
     */
    public function getFailedEntitlement()
    {
        return $this->failedEntitlement;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedTransferEntitlementDataType|array $failedEntitlement
     * @return $this
     */
    public function setFailedEntitlement($failedEntitlement)
    {
        $this->failedEntitlement = $failedEntitlement;
        return $this;
    }
}

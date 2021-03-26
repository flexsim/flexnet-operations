<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedTransferEntitlementListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedTransferEntitlementDataType
     */
    private $failedEntitlement;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedTransferEntitlementDataType $failedEntitlement
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\FailedTransferEntitlementDataType $failedEntitlement)
    {
        $this->failedEntitlement = $failedEntitlement;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedTransferEntitlementDataType $failedEntitlement
     */
    public static function create(\Flexsim\FlexnetOperations\Type\FailedTransferEntitlementDataType $failedEntitlement)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedTransferEntitlementDataType
     */
    public function getFailedEntitlement()
    {
        return $this->failedEntitlement;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedTransferEntitlementDataType $failedEntitlement
     * @return $this
     */
    public function setFailedEntitlement($failedEntitlement)
    {
        $this->failedEntitlement = $failedEntitlement;
        return $this;
    }


}


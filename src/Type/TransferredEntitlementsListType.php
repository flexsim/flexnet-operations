<?php

namespace Flexsim\FlexnetOperations\Type;

class TransferredEntitlementsListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\TransferredEntitlementDataType
     */
    private $transferredEntitlement;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\TransferredEntitlementDataType $transferredEntitlement
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\TransferredEntitlementDataType $transferredEntitlement)
    {
        $this->transferredEntitlement = $transferredEntitlement;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\TransferredEntitlementDataType $transferredEntitlement
     */
    public static function create(\Flexsim\FlexnetOperations\Type\TransferredEntitlementDataType $transferredEntitlement)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\TransferredEntitlementDataType
     */
    public function getTransferredEntitlement()
    {
        return $this->transferredEntitlement;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\TransferredEntitlementDataType $transferredEntitlement
     * @return $this
     */
    public function setTransferredEntitlement($transferredEntitlement)
    {
        $this->transferredEntitlement = $transferredEntitlement;
        return $this;
    }


}


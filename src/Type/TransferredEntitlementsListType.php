<?php

namespace Flexsim\FlexnetOperations\Type;

class TransferredEntitlementsListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\TransferredEntitlementDataType|array 
     */
    private $transferredEntitlement;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\TransferredEntitlementDataType|array $transferredEntitlement
     */
    public function __construct($transferredEntitlement)
    {
        $this->transferredEntitlement = $transferredEntitlement;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\TransferredEntitlementDataType|array $transferredEntitlement
     */
    public static function create($transferredEntitlement)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\TransferredEntitlementDataType|array 
     */
    public function getTransferredEntitlement()
    {
        return $this->transferredEntitlement;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\TransferredEntitlementDataType|array $transferredEntitlement
     * @return $this
     */
    public function setTransferredEntitlement($transferredEntitlement)
    {
        $this->transferredEntitlement = $transferredEntitlement;
        return $this;
    }
}

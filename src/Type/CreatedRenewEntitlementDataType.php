<?php

namespace Flexsim\FlexnetOperations\Type;

class CreatedRenewEntitlementDataType extends FlexnetType
{

    /**
     * @var string
     */
    protected $entitlementRecordRefNo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    protected $parentEntitlementIdentifier;

    /**
     * @var \Flexsim\FlexnetOperations\Type\RenewedEntitlementLineItemDataType
     */
    protected $renewedLineItem;

    /**
     * Constructor
     *
     * @var string $entitlementRecordRefNo
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $parentEntitlementIdentifier
     * @var \Flexsim\FlexnetOperations\Type\RenewedEntitlementLineItemDataType|array $renewedLineItem
     */
    public function __construct(string $entitlementRecordRefNo, \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $parentEntitlementIdentifier, $renewedLineItem = null)
    {
        $this->entitlementRecordRefNo = $entitlementRecordRefNo;
        $this->parentEntitlementIdentifier = $parentEntitlementIdentifier;
        $this->renewedLineItem = $renewedLineItem;
    }

    /**
     * create a new instance of this class
     *
     * @var string $entitlementRecordRefNo
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $parentEntitlementIdentifier
     * @var \Flexsim\FlexnetOperations\Type\RenewedEntitlementLineItemDataType|array $renewedLineItem
     */
    public static function create(string $entitlementRecordRefNo, \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $parentEntitlementIdentifier, $renewedLineItem = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getEntitlementRecordRefNo()
    {
        return $this->entitlementRecordRefNo;
    }

    /**
     * @param string $entitlementRecordRefNo
     * @return $this
     */
    public function setEntitlementRecordRefNo($entitlementRecordRefNo)
    {
        $this->entitlementRecordRefNo = $entitlementRecordRefNo;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    public function getParentEntitlementIdentifier()
    {
        return $this->parentEntitlementIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $parentEntitlementIdentifier
     * @return $this
     */
    public function setParentEntitlementIdentifier($parentEntitlementIdentifier)
    {
        $this->parentEntitlementIdentifier = $parentEntitlementIdentifier;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\RenewedEntitlementLineItemDataType
     */
    public function getRenewedLineItem()
    {
        return $this->renewedLineItem;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\RenewedEntitlementLineItemDataType $renewedLineItem
     * @return $this
     */
    public function setRenewedLineItem($renewedLineItem)
    {
        $this->renewedLineItem = $renewedLineItem;
        return $this;
    }
}

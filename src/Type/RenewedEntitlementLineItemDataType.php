<?php

namespace Flexsim\FlexnetOperations\Type;

class RenewedEntitlementLineItemDataType
{

    /**
     * @var string
     */
    private $lineItemRecordRefNo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    private $parentLineItemIdentifier;

    /**
     * @var \Flexsim\FlexnetOperations\Type\NewEntitlementLineItemDataType
     */
    private $newLineItem;

    /**
     * Constructor
     *
     * @var string $lineItemRecordRefNo
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $parentLineItemIdentifier
     * @var \Flexsim\FlexnetOperations\Type\NewEntitlementLineItemDataType $newLineItem
     */
    public function __construct(string $lineItemRecordRefNo, \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $parentLineItemIdentifier, \Flexsim\FlexnetOperations\Type\NewEntitlementLineItemDataType $newLineItem)
    {
        $this->lineItemRecordRefNo = $lineItemRecordRefNo;
        $this->parentLineItemIdentifier = $parentLineItemIdentifier;
        $this->newLineItem = $newLineItem;
    }

    /**
     * create a new instance of this class
     *
     * @var string $lineItemRecordRefNo
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $parentLineItemIdentifier
     * @var \Flexsim\FlexnetOperations\Type\NewEntitlementLineItemDataType $newLineItem
     */
    public static function create(string $lineItemRecordRefNo, \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $parentLineItemIdentifier, \Flexsim\FlexnetOperations\Type\NewEntitlementLineItemDataType $newLineItem)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getLineItemRecordRefNo()
    {
        return $this->lineItemRecordRefNo;
    }

    /**
     * @param string $lineItemRecordRefNo
     * @return $this
     */
    public function setLineItemRecordRefNo($lineItemRecordRefNo)
    {
        $this->lineItemRecordRefNo = $lineItemRecordRefNo;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    public function getParentLineItemIdentifier()
    {
        return $this->parentLineItemIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $parentLineItemIdentifier
     * @return $this
     */
    public function setParentLineItemIdentifier($parentLineItemIdentifier)
    {
        $this->parentLineItemIdentifier = $parentLineItemIdentifier;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\NewEntitlementLineItemDataType
     */
    public function getNewLineItem()
    {
        return $this->newLineItem;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\NewEntitlementLineItemDataType $newLineItem
     * @return $this
     */
    public function setNewLineItem($newLineItem)
    {
        $this->newLineItem = $newLineItem;
        return $this;
    }


}


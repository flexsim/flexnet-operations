<?php

namespace Flexsim\FlexnetOperations\Type;

class CreatedEntitlementLifeCycleDataType extends FlexnetType
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
     * @var \Flexsim\FlexnetOperations\Type\LifeCycleLineItemDataType
     */
    protected $createdLineItemData;

    /**
     * Constructor
     *
     * @var string $entitlementRecordRefNo
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $parentEntitlementIdentifier
     * @var \Flexsim\FlexnetOperations\Type\LifeCycleLineItemDataType|array $createdLineItemData
     */
    public function __construct(string $entitlementRecordRefNo, \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $parentEntitlementIdentifier, $createdLineItemData = null)
    {
        $this->entitlementRecordRefNo = $entitlementRecordRefNo;
        $this->parentEntitlementIdentifier = $parentEntitlementIdentifier;
        $this->createdLineItemData = $createdLineItemData;
    }

    /**
     * create a new instance of this class
     *
     * @var string $entitlementRecordRefNo
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $parentEntitlementIdentifier
     * @var \Flexsim\FlexnetOperations\Type\LifeCycleLineItemDataType|array $createdLineItemData
     */
    public static function create(string $entitlementRecordRefNo, \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $parentEntitlementIdentifier, $createdLineItemData = null)
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
     * @return \Flexsim\FlexnetOperations\Type\LifeCycleLineItemDataType
     */
    public function getCreatedLineItemData()
    {
        return $this->createdLineItemData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LifeCycleLineItemDataType $createdLineItemData
     * @return $this
     */
    public function setCreatedLineItemData($createdLineItemData)
    {
        $this->createdLineItemData = $createdLineItemData;
        return $this;
    }
}

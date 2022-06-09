<?php

namespace Flexsim\FlexnetOperations\Type;

class CreatedSimpleEntitlementDataType extends FlexnetType
{
    /**
     * @var string
     */
    protected $recordRefNo;

    /**
     * @var string
     */
    protected $uniqueId;

    /**
     * @var string
     */
    protected $entitlementId;

    /**
     * @var string
     */
    protected $lineItemUniqueIds;

    /**
     * @var string
     */
    protected $maintenanceLineItemUniqueIds;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    protected $lineItemIdentifiers;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    protected $maintenanceLineItemIdentifiers;

    /**
     * Constructor
     *
     * @param string $recordRefNo
     * @param string $uniqueId
     * @param string $entitlementId
     * @param string|array $lineItemUniqueIds
     * @param string|array $maintenanceLineItemUniqueIds
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType|array $lineItemIdentifiers
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType|array $maintenanceLineItemIdentifiers
     */
    public function __construct(string $recordRefNo, string $uniqueId, string $entitlementId, $lineItemUniqueIds = null, $maintenanceLineItemUniqueIds = null, $lineItemIdentifiers = null, $maintenanceLineItemIdentifiers = null)
    {
        $this->recordRefNo = $recordRefNo;
        $this->uniqueId = $uniqueId;
        $this->entitlementId = $entitlementId;
        $this->lineItemUniqueIds = $lineItemUniqueIds;
        $this->maintenanceLineItemUniqueIds = $maintenanceLineItemUniqueIds;
        $this->lineItemIdentifiers = $lineItemIdentifiers;
        $this->maintenanceLineItemIdentifiers = $maintenanceLineItemIdentifiers;
    }

    /**
     * create a new instance of this class
     *
     * @param string $recordRefNo
     * @param string $uniqueId
     * @param string $entitlementId
     * @param string|array $lineItemUniqueIds
     * @param string|array $maintenanceLineItemUniqueIds
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType|array $lineItemIdentifiers
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType|array $maintenanceLineItemIdentifiers
     */
    public static function create(string $recordRefNo, string $uniqueId, string $entitlementId, $lineItemUniqueIds = null, $maintenanceLineItemUniqueIds = null, $lineItemIdentifiers = null, $maintenanceLineItemIdentifiers = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getRecordRefNo()
    {
        return $this->recordRefNo;
    }

    /**
     * @param string $recordRefNo
     * @return $this
     */
    public function setRecordRefNo($recordRefNo)
    {
        $this->recordRefNo = $recordRefNo;

        return $this;
    }

    /**
     * @return string
     */
    public function getUniqueId()
    {
        return $this->uniqueId;
    }

    /**
     * @param string $uniqueId
     * @return $this
     */
    public function setUniqueId($uniqueId)
    {
        $this->uniqueId = $uniqueId;

        return $this;
    }

    /**
     * @return string
     */
    public function getEntitlementId()
    {
        return $this->entitlementId;
    }

    /**
     * @param string $entitlementId
     * @return $this
     */
    public function setEntitlementId($entitlementId)
    {
        $this->entitlementId = $entitlementId;

        return $this;
    }

    /**
     * @return string
     */
    public function getLineItemUniqueIds()
    {
        return $this->lineItemUniqueIds;
    }

    /**
     * @param string $lineItemUniqueIds
     * @return $this
     */
    public function setLineItemUniqueIds($lineItemUniqueIds)
    {
        $this->lineItemUniqueIds = $lineItemUniqueIds;

        return $this;
    }

    /**
     * @return string
     */
    public function getMaintenanceLineItemUniqueIds()
    {
        return $this->maintenanceLineItemUniqueIds;
    }

    /**
     * @param string $maintenanceLineItemUniqueIds
     * @return $this
     */
    public function setMaintenanceLineItemUniqueIds($maintenanceLineItemUniqueIds)
    {
        $this->maintenanceLineItemUniqueIds = $maintenanceLineItemUniqueIds;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    public function getLineItemIdentifiers()
    {
        return $this->lineItemIdentifiers;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItemIdentifiers
     * @return $this
     */
    public function setLineItemIdentifiers($lineItemIdentifiers)
    {
        $this->lineItemIdentifiers = $lineItemIdentifiers;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    public function getMaintenanceLineItemIdentifiers()
    {
        return $this->maintenanceLineItemIdentifiers;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $maintenanceLineItemIdentifiers
     * @return $this
     */
    public function setMaintenanceLineItemIdentifiers($maintenanceLineItemIdentifiers)
    {
        $this->maintenanceLineItemIdentifiers = $maintenanceLineItemIdentifiers;

        return $this;
    }
}

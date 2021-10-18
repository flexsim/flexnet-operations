<?php

namespace Flexsim\FlexnetOperations\Type;

class AddedEntitlementLineItemDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    protected $entitlementIdentifier;

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
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier
     * @var string|array $lineItemUniqueIds
     * @var string|array $maintenanceLineItemUniqueIds
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType|array $lineItemIdentifiers
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType|array $maintenanceLineItemIdentifiers
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier, $lineItemUniqueIds = null, $maintenanceLineItemUniqueIds = null, $lineItemIdentifiers = null, $maintenanceLineItemIdentifiers = null)
    {
        $this->entitlementIdentifier = $entitlementIdentifier;
        $this->lineItemUniqueIds = $lineItemUniqueIds;
        $this->maintenanceLineItemUniqueIds = $maintenanceLineItemUniqueIds;
        $this->lineItemIdentifiers = $lineItemIdentifiers;
        $this->maintenanceLineItemIdentifiers = $maintenanceLineItemIdentifiers;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier
     * @var string|array $lineItemUniqueIds
     * @var string|array $maintenanceLineItemUniqueIds
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType|array $lineItemIdentifiers
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType|array $maintenanceLineItemIdentifiers
     */
    public static function create(\Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier, $lineItemUniqueIds = null, $maintenanceLineItemUniqueIds = null, $lineItemIdentifiers = null, $maintenanceLineItemIdentifiers = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    public function getEntitlementIdentifier()
    {
        return $this->entitlementIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier
     * @return $this
     */
    public function setEntitlementIdentifier($entitlementIdentifier)
    {
        $this->entitlementIdentifier = $entitlementIdentifier;
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

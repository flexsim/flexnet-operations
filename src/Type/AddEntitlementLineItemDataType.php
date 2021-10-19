<?php

namespace Flexsim\FlexnetOperations\Type;

class AddEntitlementLineItemDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    protected $entitlementIdentifier;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreateEntitlementLineItemDataType
     */
    protected $lineItems;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreateMaintenanceLineItemDataType
     */
    protected $maintenanceLineItems;

    /**
     * @var bool
     */
    protected $autoDeploy;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier
     * @param \Flexsim\FlexnetOperations\Type\CreateEntitlementLineItemDataType|array $lineItems
     * @param \Flexsim\FlexnetOperations\Type\CreateMaintenanceLineItemDataType|array $maintenanceLineItems
     * @param bool $autoDeploy
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier, $lineItems = null, $maintenanceLineItems = null, bool $autoDeploy = null)
    {
        $this->entitlementIdentifier = $entitlementIdentifier;
        $this->lineItems = $lineItems;
        $this->maintenanceLineItems = $maintenanceLineItems;
        $this->autoDeploy = $autoDeploy;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier
     * @param \Flexsim\FlexnetOperations\Type\CreateEntitlementLineItemDataType|array $lineItems
     * @param \Flexsim\FlexnetOperations\Type\CreateMaintenanceLineItemDataType|array $maintenanceLineItems
     * @param bool $autoDeploy
     */
    public static function create(\Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier, $lineItems = null, $maintenanceLineItems = null, bool $autoDeploy = null)
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
     * @return \Flexsim\FlexnetOperations\Type\CreateEntitlementLineItemDataType
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreateEntitlementLineItemDataType $lineItems
     * @return $this
     */
    public function setLineItems($lineItems)
    {
        $this->lineItems = $lineItems;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreateMaintenanceLineItemDataType
     */
    public function getMaintenanceLineItems()
    {
        return $this->maintenanceLineItems;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreateMaintenanceLineItemDataType $maintenanceLineItems
     * @return $this
     */
    public function setMaintenanceLineItems($maintenanceLineItems)
    {
        $this->maintenanceLineItems = $maintenanceLineItems;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAutoDeploy()
    {
        return $this->autoDeploy;
    }

    /**
     * @param bool $autoDeploy
     * @return $this
     */
    public function setAutoDeploy($autoDeploy)
    {
        $this->autoDeploy = $autoDeploy;
        return $this;
    }
}

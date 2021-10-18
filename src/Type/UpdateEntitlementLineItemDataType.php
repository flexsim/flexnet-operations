<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateEntitlementLineItemDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    protected $entitlementIdentifier;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateLineItemDataType
     */
    protected $lineItemData;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateMaintenanceLineItemDataType
     */
    protected $maintenanceLineItemData;

    /**
     * @var bool
     */
    protected $autoDeploy;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier
     * @var \Flexsim\FlexnetOperations\Type\UpdateLineItemDataType|array $lineItemData
     * @var \Flexsim\FlexnetOperations\Type\UpdateMaintenanceLineItemDataType|array $maintenanceLineItemData
     * @var bool $autoDeploy
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier, $lineItemData = null, $maintenanceLineItemData = null, bool $autoDeploy = null)
    {
        $this->entitlementIdentifier = $entitlementIdentifier;
        $this->lineItemData = $lineItemData;
        $this->maintenanceLineItemData = $maintenanceLineItemData;
        $this->autoDeploy = $autoDeploy;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier
     * @var \Flexsim\FlexnetOperations\Type\UpdateLineItemDataType|array $lineItemData
     * @var \Flexsim\FlexnetOperations\Type\UpdateMaintenanceLineItemDataType|array $maintenanceLineItemData
     * @var bool $autoDeploy
     */
    public static function create(\Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier, $lineItemData = null, $maintenanceLineItemData = null, bool $autoDeploy = null)
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
     * @return \Flexsim\FlexnetOperations\Type\UpdateLineItemDataType
     */
    public function getLineItemData()
    {
        return $this->lineItemData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateLineItemDataType $lineItemData
     * @return $this
     */
    public function setLineItemData($lineItemData)
    {
        $this->lineItemData = $lineItemData;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateMaintenanceLineItemDataType
     */
    public function getMaintenanceLineItemData()
    {
        return $this->maintenanceLineItemData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateMaintenanceLineItemDataType $maintenanceLineItemData
     * @return $this
     */
    public function setMaintenanceLineItemData($maintenanceLineItemData)
    {
        $this->maintenanceLineItemData = $maintenanceLineItemData;
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

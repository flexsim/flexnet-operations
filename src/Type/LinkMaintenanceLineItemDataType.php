<?php

namespace Flexsim\FlexnetOperations\Type;

class LinkMaintenanceLineItemDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    private $lineItemIdentifier;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    private $maintenanceLineItemIdentifier;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItemIdentifier
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $maintenanceLineItemIdentifier
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItemIdentifier, \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $maintenanceLineItemIdentifier)
    {
        $this->lineItemIdentifier = $lineItemIdentifier;
        $this->maintenanceLineItemIdentifier = $maintenanceLineItemIdentifier;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItemIdentifier
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $maintenanceLineItemIdentifier
     */
    public static function create(\Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItemIdentifier, \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $maintenanceLineItemIdentifier)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    public function getLineItemIdentifier()
    {
        return $this->lineItemIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItemIdentifier
     * @return $this
     */
    public function setLineItemIdentifier($lineItemIdentifier)
    {
        $this->lineItemIdentifier = $lineItemIdentifier;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    public function getMaintenanceLineItemIdentifier()
    {
        return $this->maintenanceLineItemIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $maintenanceLineItemIdentifier
     * @return $this
     */
    public function setMaintenanceLineItemIdentifier($maintenanceLineItemIdentifier)
    {
        $this->maintenanceLineItemIdentifier = $maintenanceLineItemIdentifier;
        return $this;
    }


}


<?php

namespace Flexsim\FlexnetOperations\Type;

class LinkMaintenanceLineItemDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    protected $lineItemIdentifier;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    protected $maintenanceLineItemIdentifier;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType  $lineItemIdentifier
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType  $maintenanceLineItemIdentifier
     */
    public function __construct(EntitlementLineItemIdentifierType $lineItemIdentifier, EntitlementLineItemIdentifierType $maintenanceLineItemIdentifier)
    {
        $this->lineItemIdentifier = $lineItemIdentifier;
        $this->maintenanceLineItemIdentifier = $maintenanceLineItemIdentifier;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType  $lineItemIdentifier
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType  $maintenanceLineItemIdentifier
     */
    public static function create(EntitlementLineItemIdentifierType $lineItemIdentifier, EntitlementLineItemIdentifierType $maintenanceLineItemIdentifier)
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
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType  $lineItemIdentifier
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
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType  $maintenanceLineItemIdentifier
     * @return $this
     */
    public function setMaintenanceLineItemIdentifier($maintenanceLineItemIdentifier)
    {
        $this->maintenanceLineItemIdentifier = $maintenanceLineItemIdentifier;

        return $this;
    }
}

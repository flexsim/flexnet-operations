<?php

namespace Flexsim\FlexnetOperations\Type;

class DeleteEntitlementDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    private $entitlementIdentifier;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier)
    {
        $this->entitlementIdentifier = $entitlementIdentifier;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier
     */
    public static function create(\Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementIdentifier)
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


}


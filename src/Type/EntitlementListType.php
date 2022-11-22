<?php

namespace Flexsim\FlexnetOperations\Type;

class EntitlementListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType|array
     */
    protected $entitlementIdentifier;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType|array  $entitlementIdentifier
     */
    public function __construct($entitlementIdentifier)
    {
        $this->entitlementIdentifier = $entitlementIdentifier;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType|array  $entitlementIdentifier
     */
    public static function create($entitlementIdentifier)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType|array
     */
    public function getEntitlementIdentifier()
    {
        return $this->entitlementIdentifier;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType|array  $entitlementIdentifier
     * @return $this
     */
    public function setEntitlementIdentifier($entitlementIdentifier)
    {
        $this->entitlementIdentifier = $entitlementIdentifier;

        return $this;
    }
}

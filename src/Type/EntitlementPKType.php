<?php

namespace Flexsim\FlexnetOperations\Type;

class EntitlementPKType
{

    /**
     * @var string
     */
    private $entitlementId;

    /**
     * Constructor
     *
     * @var string $entitlementId
     */
    public function __construct(string $entitlementId)
    {
        $this->entitlementId = $entitlementId;
    }

    /**
     * create a new instance of this class
     *
     * @var string $entitlementId
     */
    public static function create(string $entitlementId)
    {
        return new self(...func_get_args());
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


}


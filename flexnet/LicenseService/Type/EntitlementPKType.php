<?php

namespace Flexnet\LicenseService\Type;

class EntitlementPKType
{
    /**
     * @var string
     */
    private $entitlementId;

    /**
     * Constructor
     *
     * @param string $entitlementId
     */
    public function __construct(string $entitlementId)
    {
        $this->entitlementId = $entitlementId;
    }

    /**
     * @param string $entitlementId
     */
    public static function create(string $entitlementId)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string
     */
    public function getEntitlementId() : string
    {
        return $this->entitlementId;
    }

    /**
     * @param string $entitlementId
     * @return EntitlementPKType
     */
    public function withEntitlementId(string $entitlementId) : \Flexnet\LicenseService\Type\EntitlementPKType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }
}


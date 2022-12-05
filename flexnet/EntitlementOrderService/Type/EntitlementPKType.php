<?php

namespace Flexnet\EntitlementOrderService\Type;

class EntitlementPKType
{
    /**
     * @var string
     */
    private $entitlementId;

    /**
     * Constructor
     *
     * @param  string  $entitlementId
     */
    public function __construct(string $entitlementId)
    {
        $this->entitlementId = $entitlementId;
    }

    /**
     * @param  string  $entitlementId
     */
    public static function create(string $entitlementId)
    {
        return new static(...\func_get_args());
    }

    public function getEntitlementId(): string
    {
        return $this->entitlementId;
    }

    public function withEntitlementId(string $entitlementId): EntitlementPKType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }
}

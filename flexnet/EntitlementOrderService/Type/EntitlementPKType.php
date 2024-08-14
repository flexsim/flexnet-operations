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
     */
    public function __construct(string $entitlementId)
    {
        $this->entitlementId = $entitlementId;
    }

    public static function create(string $entitlementId)
    {
        return new static(...\func_get_args());
    }

    public function getEntitlementId(): string
    {
        return $this->entitlementId;
    }

    public function withEntitlementId(string $entitlementId): \Flexnet\EntitlementOrderService\Type\EntitlementPKType
    {
        $new = clone $this;
        $new->entitlementId = $entitlementId;

        return $new;
    }
}

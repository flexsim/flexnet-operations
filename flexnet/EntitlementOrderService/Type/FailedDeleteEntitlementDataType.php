<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedDeleteEntitlementDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
     */
    private $entitlementIdentifier;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $entitlementIdentifier
     * @param  string|null  $reason
     */
    public function __construct(EntitlementIdentifierType $entitlementIdentifier, string|null $reason = null)
    {
        $this->entitlementIdentifier = $entitlementIdentifier;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $entitlementIdentifier
     * @param  string|null  $reason
     */
    public static function create(EntitlementIdentifierType $entitlementIdentifier, string|null $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getEntitlementIdentifier(): EntitlementIdentifierType
    {
        return $this->entitlementIdentifier;
    }

    public function withEntitlementIdentifier(EntitlementIdentifierType $entitlementIdentifier): FailedDeleteEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementIdentifier = $entitlementIdentifier;

        return $new;
    }

    public function getReason(): string|null
    {
        return $this->reason;
    }

    public function withReason(string|null $reason): FailedDeleteEntitlementDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}

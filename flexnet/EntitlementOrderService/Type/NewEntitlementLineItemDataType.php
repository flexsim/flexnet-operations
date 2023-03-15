<?php

namespace Flexnet\EntitlementOrderService\Type;

class NewEntitlementLineItemDataType
{
    /**
     * @var string
     */
    private $uniqueId;

    /**
     * @var string
     */
    private $activationId;

    /**
     * Constructor
     */
    public function __construct(string $uniqueId, string $activationId)
    {
        $this->uniqueId = $uniqueId;
        $this->activationId = $activationId;
    }

    public static function create(string $uniqueId, string $activationId)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): string
    {
        return $this->uniqueId;
    }

    public function withUniqueId(string $uniqueId): NewEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    public function getActivationId(): string
    {
        return $this->activationId;
    }

    public function withActivationId(string $activationId): NewEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }
}

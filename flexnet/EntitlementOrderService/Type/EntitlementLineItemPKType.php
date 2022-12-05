<?php

namespace Flexnet\EntitlementOrderService\Type;

class EntitlementLineItemPKType
{
    /**
     * @var string
     */
    private $activationId;

    /**
     * Constructor
     *
     * @param  string  $activationId
     */
    public function __construct(string $activationId)
    {
        $this->activationId = $activationId;
    }

    /**
     * @param  string  $activationId
     */
    public static function create(string $activationId)
    {
        return new static(...\func_get_args());
    }

    public function getActivationId(): string
    {
        return $this->activationId;
    }

    public function withActivationId(string $activationId): EntitlementLineItemPKType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }
}

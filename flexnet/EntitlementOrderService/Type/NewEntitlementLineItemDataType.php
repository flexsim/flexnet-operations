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
     *
     * @param  string  $uniqueId
     * @param  string  $activationId
     */
    public function __construct(string $uniqueId, string $activationId)
    {
        $this->uniqueId = $uniqueId;
        $this->activationId = $activationId;
    }

    /**
     * @param  string  $uniqueId
     * @param  string  $activationId
     */
    public static function create(string $uniqueId, string $activationId)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string
     */
    public function getUniqueId(): string
    {
        return $this->uniqueId;
    }

    /**
     * @param  string  $uniqueId
     * @return NewEntitlementLineItemDataType
     */
    public function withUniqueId(string $uniqueId): NewEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    /**
     * @return string
     */
    public function getActivationId(): string
    {
        return $this->activationId;
    }

    /**
     * @param  string  $activationId
     * @return NewEntitlementLineItemDataType
     */
    public function withActivationId(string $activationId): NewEntitlementLineItemDataType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }
}

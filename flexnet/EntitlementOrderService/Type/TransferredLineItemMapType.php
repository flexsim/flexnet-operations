<?php

namespace Flexnet\EntitlementOrderService\Type;

class TransferredLineItemMapType
{
    /**
     * @var string
     */
    private $activationId;

    /**
     * @var string|null
     */
    private $transferredFromId;

    /**
     * Constructor
     */
    public function __construct(string $activationId, ?string $transferredFromId = null)
    {
        $this->activationId = $activationId;
        $this->transferredFromId = $transferredFromId;
    }

    public static function create(string $activationId, ?string $transferredFromId = null)
    {
        return new static(...\func_get_args());
    }

    public function getActivationId(): string
    {
        return $this->activationId;
    }

    public function withActivationId(string $activationId): \Flexnet\EntitlementOrderService\Type\TransferredLineItemMapType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    public function getTransferredFromId(): ?string
    {
        return $this->transferredFromId;
    }

    public function withTransferredFromId(?string $transferredFromId): \Flexnet\EntitlementOrderService\Type\TransferredLineItemMapType
    {
        $new = clone $this;
        $new->transferredFromId = $transferredFromId;

        return $new;
    }
}

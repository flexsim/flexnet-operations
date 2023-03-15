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
     *
     * @param  string|null  $transferredFromId
     */
    public function __construct(string $activationId, string|null $transferredFromId = null)
    {
        $this->activationId = $activationId;
        $this->transferredFromId = $transferredFromId;
    }

    /**
     * @param  string|null  $transferredFromId
     */
    public static function create(string $activationId, string|null $transferredFromId = null)
    {
        return new static(...\func_get_args());
    }

    public function getActivationId(): string
    {
        return $this->activationId;
    }

    public function withActivationId(string $activationId): TransferredLineItemMapType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    public function getTransferredFromId(): string|null
    {
        return $this->transferredFromId;
    }

    public function withTransferredFromId(string|null $transferredFromId): TransferredLineItemMapType
    {
        $new = clone $this;
        $new->transferredFromId = $transferredFromId;

        return $new;
    }
}

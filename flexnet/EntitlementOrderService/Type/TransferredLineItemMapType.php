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
     * @param  string  $activationId
     * @param  string|null  $transferredFromId
     */
    public function __construct(string $activationId, string|null $transferredFromId = null)
    {
        $this->activationId = $activationId;
        $this->transferredFromId = $transferredFromId;
    }

    /**
     * @param  string  $activationId
     * @param  string|null  $transferredFromId
     */
    public static function create(string $activationId, string|null $transferredFromId = null)
    {
        return new static(...\func_get_args());
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
     * @return TransferredLineItemMapType
     */
    public function withActivationId(string $activationId): TransferredLineItemMapType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getTransferredFromId(): string|null
    {
        return $this->transferredFromId;
    }

    /**
     * @param  string|null  $transferredFromId
     * @return TransferredLineItemMapType
     */
    public function withTransferredFromId(string|null $transferredFromId): TransferredLineItemMapType
    {
        $new = clone $this;
        $new->transferredFromId = $transferredFromId;

        return $new;
    }
}

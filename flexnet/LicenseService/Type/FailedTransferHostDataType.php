<?php

namespace Flexnet\LicenseService\Type;

class FailedTransferHostDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\TransferHostIdDataType|null
     */
    private $hostIdentifier;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(TransferHostIdDataType $hostIdentifier = null, string $reason = null)
    {
        $this->hostIdentifier = $hostIdentifier;
        $this->reason = $reason;
    }

    public static function create(TransferHostIdDataType $hostIdentifier = null, string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getHostIdentifier(): ?TransferHostIdDataType
    {
        return $this->hostIdentifier;
    }

    public function withHostIdentifier(?TransferHostIdDataType $hostIdentifier): FailedTransferHostDataType
    {
        $new = clone $this;
        $new->hostIdentifier = $hostIdentifier;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): FailedTransferHostDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}

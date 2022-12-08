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
     *
     * @param  \Flexnet\LicenseService\Type\TransferHostIdDataType|null  $hostIdentifier
     * @param  string|null  $reason
     */
    public function __construct(TransferHostIdDataType|null $hostIdentifier = null, string|null $reason = null)
    {
        $this->hostIdentifier = $hostIdentifier;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\TransferHostIdDataType|null  $hostIdentifier
     * @param  string|null  $reason
     */
    public static function create(TransferHostIdDataType|null $hostIdentifier = null, string|null $reason = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\TransferHostIdDataType|null
     */
    public function getHostIdentifier(): TransferHostIdDataType|null
    {
        return $this->hostIdentifier;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\TransferHostIdDataType|null  $hostIdentifier
     * @return FailedTransferHostDataType
     */
    public function withHostIdentifier(TransferHostIdDataType|null $hostIdentifier): FailedTransferHostDataType
    {
        $new = clone $this;
        $new->hostIdentifier = $hostIdentifier;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getReason(): string|null
    {
        return $this->reason;
    }

    /**
     * @param  string|null  $reason
     * @return FailedTransferHostDataType
     */
    public function withReason(string|null $reason): FailedTransferHostDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}

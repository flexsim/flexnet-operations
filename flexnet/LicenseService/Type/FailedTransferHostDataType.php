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
     * @param \Flexnet\LicenseService\Type\TransferHostIdDataType|null $hostIdentifier
     * @param string|null $reason
     */
    public function __construct(\Flexnet\LicenseService\Type\TransferHostIdDataType|null $hostIdentifier = null, string|null $reason = null)
    {
        $this->hostIdentifier = $hostIdentifier;
        $this->reason = $reason;
    }

    /**
     * @param \Flexnet\LicenseService\Type\TransferHostIdDataType|null $hostIdentifier
     * @param string|null $reason
     */
    public static function create(\Flexnet\LicenseService\Type\TransferHostIdDataType|null $hostIdentifier = null, string|null $reason = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\TransferHostIdDataType|null
     */
    public function getHostIdentifier() : \Flexnet\LicenseService\Type\TransferHostIdDataType|null
    {
        return $this->hostIdentifier;
    }

    /**
     * @param \Flexnet\LicenseService\Type\TransferHostIdDataType|null $hostIdentifier
     * @return FailedTransferHostDataType
     */
    public function withHostIdentifier(\Flexnet\LicenseService\Type\TransferHostIdDataType|null $hostIdentifier) : \Flexnet\LicenseService\Type\FailedTransferHostDataType
    {
        $new = clone $this;
        $new->hostIdentifier = $hostIdentifier;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getReason() : string|null
    {
        return $this->reason;
    }

    /**
     * @param string|null $reason
     * @return FailedTransferHostDataType
     */
    public function withReason(string|null $reason) : \Flexnet\LicenseService\Type\FailedTransferHostDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}


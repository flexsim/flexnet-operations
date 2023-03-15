<?php

namespace Flexnet\LicenseService\Type;

class FailedTransferHostListDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\FailedTransferHostDataType|array<\Flexnet\LicenseService\Type\FailedTransferHostDataType>|null
     */
    private $failedHost;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\FailedTransferHostDataType|array<\Flexnet\LicenseService\Type\FailedTransferHostDataType>|null  $failedHost
     */
    public function __construct(FailedTransferHostDataType|array|null $failedHost = null)
    {
        $this->failedHost = $failedHost;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedTransferHostDataType|array<\Flexnet\LicenseService\Type\FailedTransferHostDataType>|null  $failedHost
     */
    public static function create(FailedTransferHostDataType|array|null $failedHost = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedTransferHostDataType|array<\Flexnet\LicenseService\Type\FailedTransferHostDataType>|null
     */
    public function getFailedHost(): FailedTransferHostDataType|array|null
    {
        return $this->failedHost;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedTransferHostDataType|array<\Flexnet\LicenseService\Type\FailedTransferHostDataType>|null  $failedHost
     */
    public function withFailedHost(FailedTransferHostDataType|array|null $failedHost): FailedTransferHostListDataType
    {
        $new = clone $this;
        $new->failedHost = $failedHost;

        return $new;
    }
}

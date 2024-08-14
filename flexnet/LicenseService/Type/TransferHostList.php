<?php

namespace Flexnet\LicenseService\Type;

class TransferHostList
{
    /**
     * @var \Flexnet\LicenseService\Type\TransferHostIdDataType|array<\Flexnet\LicenseService\Type\TransferHostIdDataType>
     */
    private $hostIdentifier;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\TransferHostIdDataType|array<\Flexnet\LicenseService\Type\TransferHostIdDataType>  $hostIdentifier
     */
    public function __construct(\Flexnet\LicenseService\Type\TransferHostIdDataType|array $hostIdentifier)
    {
        $this->hostIdentifier = $hostIdentifier;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\TransferHostIdDataType|array<\Flexnet\LicenseService\Type\TransferHostIdDataType>  $hostIdentifier
     */
    public static function create(\Flexnet\LicenseService\Type\TransferHostIdDataType|array $hostIdentifier)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\TransferHostIdDataType|array<\Flexnet\LicenseService\Type\TransferHostIdDataType>
     */
    public function getHostIdentifier(): \Flexnet\LicenseService\Type\TransferHostIdDataType|array
    {
        return $this->hostIdentifier;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\TransferHostIdDataType|array<\Flexnet\LicenseService\Type\TransferHostIdDataType>  $hostIdentifier
     */
    public function withHostIdentifier(\Flexnet\LicenseService\Type\TransferHostIdDataType|array $hostIdentifier): \Flexnet\LicenseService\Type\TransferHostList
    {
        $new = clone $this;
        $new->hostIdentifier = $hostIdentifier;

        return $new;
    }
}

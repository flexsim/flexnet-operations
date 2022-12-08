<?php

namespace Flexnet\LicenseService\Type;

class HostIdDetailsType
{
    /**
     * @var \Flexnet\LicenseService\Type\HostIdDataDetailsType|array<\Flexnet\LicenseService\Type\HostIdDataDetailsType>
     */
    private $hostIdData;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\HostIdDataDetailsType|array<\Flexnet\LicenseService\Type\HostIdDataDetailsType>  $hostIdData
     */
    public function __construct(HostIdDataDetailsType|array $hostIdData)
    {
        $this->hostIdData = $hostIdData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\HostIdDataDetailsType|array<\Flexnet\LicenseService\Type\HostIdDataDetailsType>  $hostIdData
     */
    public static function create(HostIdDataDetailsType|array $hostIdData)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\HostIdDataDetailsType|array<\Flexnet\LicenseService\Type\HostIdDataDetailsType>
     */
    public function getHostIdData(): HostIdDataDetailsType|array
    {
        return $this->hostIdData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\HostIdDataDetailsType|array<\Flexnet\LicenseService\Type\HostIdDataDetailsType>  $hostIdData
     * @return HostIdDetailsType
     */
    public function withHostIdData(HostIdDataDetailsType|array $hostIdData): HostIdDetailsType
    {
        $new = clone $this;
        $new->hostIdData = $hostIdData;

        return $new;
    }
}

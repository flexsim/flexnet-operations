<?php

namespace Flexnet\LicenseService\Type;

class HostIdDataSetType
{
    /**
     * @var \Flexnet\LicenseService\Type\HostIdDataType|array<\Flexnet\LicenseService\Type\HostIdDataType>
     */
    private $hostIdData;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\HostIdDataType|array<\Flexnet\LicenseService\Type\HostIdDataType>  $hostIdData
     */
    public function __construct(\Flexnet\LicenseService\Type\HostIdDataType|array $hostIdData)
    {
        $this->hostIdData = $hostIdData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\HostIdDataType|array<\Flexnet\LicenseService\Type\HostIdDataType>  $hostIdData
     */
    public static function create(\Flexnet\LicenseService\Type\HostIdDataType|array $hostIdData)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\HostIdDataType|array<\Flexnet\LicenseService\Type\HostIdDataType>
     */
    public function getHostIdData(): \Flexnet\LicenseService\Type\HostIdDataType|array
    {
        return $this->hostIdData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\HostIdDataType|array<\Flexnet\LicenseService\Type\HostIdDataType>  $hostIdData
     */
    public function withHostIdData(\Flexnet\LicenseService\Type\HostIdDataType|array $hostIdData): \Flexnet\LicenseService\Type\HostIdDataSetType
    {
        $new = clone $this;
        $new->hostIdData = $hostIdData;

        return $new;
    }
}

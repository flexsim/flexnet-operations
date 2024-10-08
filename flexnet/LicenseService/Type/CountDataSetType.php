<?php

namespace Flexnet\LicenseService\Type;

class CountDataSetType
{
    /**
     * @var \Flexnet\LicenseService\Type\CountDataType|array<\Flexnet\LicenseService\Type\CountDataType>
     */
    private $countData;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\CountDataType|array<\Flexnet\LicenseService\Type\CountDataType>  $countData
     */
    public function __construct(\Flexnet\LicenseService\Type\CountDataType|array $countData)
    {
        $this->countData = $countData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CountDataType|array<\Flexnet\LicenseService\Type\CountDataType>  $countData
     */
    public static function create(\Flexnet\LicenseService\Type\CountDataType|array $countData)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\CountDataType|array<\Flexnet\LicenseService\Type\CountDataType>
     */
    public function getCountData(): \Flexnet\LicenseService\Type\CountDataType|array
    {
        return $this->countData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CountDataType|array<\Flexnet\LicenseService\Type\CountDataType>  $countData
     */
    public function withCountData(\Flexnet\LicenseService\Type\CountDataType|array $countData): \Flexnet\LicenseService\Type\CountDataSetType
    {
        $new = clone $this;
        $new->countData = $countData;

        return $new;
    }
}

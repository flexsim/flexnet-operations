<?php

namespace Flexnet\LicenseService\Type;

class LicenseFileDataListType
{
    /**
     * @var \Flexnet\LicenseService\Type\LicenseFileDataType|array<\Flexnet\LicenseService\Type\LicenseFileDataType>|null
     */
    private $licenseFile;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\LicenseFileDataType|array<\Flexnet\LicenseService\Type\LicenseFileDataType>|null  $licenseFile
     */
    public function __construct(\Flexnet\LicenseService\Type\LicenseFileDataType|array|null $licenseFile = null)
    {
        $this->licenseFile = $licenseFile;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\LicenseFileDataType|array<\Flexnet\LicenseService\Type\LicenseFileDataType>|null  $licenseFile
     */
    public static function create(\Flexnet\LicenseService\Type\LicenseFileDataType|array|null $licenseFile = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\LicenseFileDataType|array<\Flexnet\LicenseService\Type\LicenseFileDataType>|null
     */
    public function getLicenseFile(): \Flexnet\LicenseService\Type\LicenseFileDataType|array|null
    {
        return $this->licenseFile;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\LicenseFileDataType|array<\Flexnet\LicenseService\Type\LicenseFileDataType>|null  $licenseFile
     */
    public function withLicenseFile(\Flexnet\LicenseService\Type\LicenseFileDataType|array|null $licenseFile): \Flexnet\LicenseService\Type\LicenseFileDataListType
    {
        $new = clone $this;
        $new->licenseFile = $licenseFile;

        return $new;
    }
}

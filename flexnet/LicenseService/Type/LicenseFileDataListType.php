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
    public function __construct(LicenseFileDataType|array $licenseFile = null)
    {
        $this->licenseFile = $licenseFile;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\LicenseFileDataType|array<\Flexnet\LicenseService\Type\LicenseFileDataType>|null  $licenseFile
     */
    public static function create(LicenseFileDataType|array $licenseFile = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\LicenseFileDataType|array<\Flexnet\LicenseService\Type\LicenseFileDataType>|null
     */
    public function getLicenseFile(): LicenseFileDataType|array|null
    {
        return $this->licenseFile;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\LicenseFileDataType|array<\Flexnet\LicenseService\Type\LicenseFileDataType>|null  $licenseFile
     */
    public function withLicenseFile(LicenseFileDataType|array|null $licenseFile): LicenseFileDataListType
    {
        $new = clone $this;
        $new->licenseFile = $licenseFile;

        return $new;
    }
}

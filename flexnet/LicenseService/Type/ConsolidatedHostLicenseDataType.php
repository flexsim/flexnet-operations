<?php

namespace Flexnet\LicenseService\Type;

class ConsolidatedHostLicenseDataType
{
    /**
     * @var string|array<string>
     */
    private $license;

    /**
     * Constructor
     *
     * @param string|array<string> $license
     */
    public function __construct(string|array $license)
    {
        $this->license = $license;
    }

    /**
     * @param string|array<string> $license
     */
    public static function create(string|array $license)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string|array<string>
     */
    public function getLicense() : string|array
    {
        return $this->license;
    }

    /**
     * @param string|array<string> $license
     * @return ConsolidatedHostLicenseDataType
     */
    public function withLicense(string|array $license) : \Flexnet\LicenseService\Type\ConsolidatedHostLicenseDataType
    {
        $new = clone $this;
        $new->license = $license;

        return $new;
    }
}


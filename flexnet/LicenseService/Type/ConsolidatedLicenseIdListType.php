<?php

namespace Flexnet\LicenseService\Type;

class ConsolidatedLicenseIdListType
{
    /**
     * @var string|array<string>
     */
    private $consolidatedLicenseId;

    /**
     * Constructor
     *
     * @param string|array<string> $consolidatedLicenseId
     */
    public function __construct(string|array $consolidatedLicenseId)
    {
        $this->consolidatedLicenseId = $consolidatedLicenseId;
    }

    /**
     * @param string|array<string> $consolidatedLicenseId
     */
    public static function create(string|array $consolidatedLicenseId)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string|array<string>
     */
    public function getConsolidatedLicenseId() : string|array
    {
        return $this->consolidatedLicenseId;
    }

    /**
     * @param string|array<string> $consolidatedLicenseId
     * @return ConsolidatedLicenseIdListType
     */
    public function withConsolidatedLicenseId(string|array $consolidatedLicenseId) : \Flexnet\LicenseService\Type\ConsolidatedLicenseIdListType
    {
        $new = clone $this;
        $new->consolidatedLicenseId = $consolidatedLicenseId;

        return $new;
    }
}


<?php

namespace Flexsim\FlexnetOperations\Type;

class GetConsolidatedFulfillmentsQueryResponseDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\ConsolidatedLicenseDataType
     */
    protected $consolidatedLicense;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\ConsolidatedLicenseDataType|array $consolidatedLicense
     */
    public function __construct($consolidatedLicense = null)
    {
        $this->consolidatedLicense = $consolidatedLicense;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\ConsolidatedLicenseDataType|array $consolidatedLicense
     */
    public static function create($consolidatedLicense = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ConsolidatedLicenseDataType
     */
    public function getConsolidatedLicense()
    {
        return $this->consolidatedLicense;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ConsolidatedLicenseDataType $consolidatedLicense
     * @return $this
     */
    public function setConsolidatedLicense($consolidatedLicense)
    {
        $this->consolidatedLicense = $consolidatedLicense;
        return $this;
    }
}

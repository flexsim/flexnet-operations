<?php

namespace Flexsim\FlexnetOperations\Type;

class ConsolidatedResponseDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\ConsolidatedLicenseDataType
     */
    protected $consolidatedLicense;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\ConsolidatedLicenseDataType  $consolidatedLicense
     */
    public function __construct(ConsolidatedLicenseDataType $consolidatedLicense)
    {
        $this->consolidatedLicense = $consolidatedLicense;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\ConsolidatedLicenseDataType  $consolidatedLicense
     */
    public static function create(ConsolidatedLicenseDataType $consolidatedLicense)
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
     * @param  \Flexsim\FlexnetOperations\Type\ConsolidatedLicenseDataType  $consolidatedLicense
     * @return $this
     */
    public function setConsolidatedLicense($consolidatedLicense)
    {
        $this->consolidatedLicense = $consolidatedLicense;

        return $this;
    }
}

<?php

namespace Flexsim\FlexnetOperations\Type;

class ConsolidatedResponseDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\ConsolidatedLicenseDataType
     */
    private $consolidatedLicense;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\ConsolidatedLicenseDataType $consolidatedLicense
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\ConsolidatedLicenseDataType $consolidatedLicense)
    {
        $this->consolidatedLicense = $consolidatedLicense;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\ConsolidatedLicenseDataType $consolidatedLicense
     */
    public static function create(\Flexsim\FlexnetOperations\Type\ConsolidatedLicenseDataType $consolidatedLicense)
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


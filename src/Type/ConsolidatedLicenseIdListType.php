<?php

namespace Flexsim\FlexnetOperations\Type;

class ConsolidatedLicenseIdListType
{

    /**
     * @var string
     */
    private $consolidatedLicenseId;

    /**
     * Constructor
     *
     * @var string $consolidatedLicenseId
     */
    public function __construct(string $consolidatedLicenseId)
    {
        $this->consolidatedLicenseId = $consolidatedLicenseId;
    }

    /**
     * create a new instance of this class
     *
     * @var string $consolidatedLicenseId
     */
    public static function create(string $consolidatedLicenseId)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getConsolidatedLicenseId()
    {
        return $this->consolidatedLicenseId;
    }

    /**
     * @param string $consolidatedLicenseId
     * @return $this
     */
    public function setConsolidatedLicenseId($consolidatedLicenseId)
    {
        $this->consolidatedLicenseId = $consolidatedLicenseId;
        return $this;
    }


}


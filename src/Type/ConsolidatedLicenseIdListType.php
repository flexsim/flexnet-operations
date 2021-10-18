<?php

namespace Flexsim\FlexnetOperations\Type;

class ConsolidatedLicenseIdListType extends FlexnetType
{

    /**
     * @var string|array
     */
    protected $consolidatedLicenseId;

    /**
     * Constructor
     *
     * @var string|array $consolidatedLicenseId
     */
    public function __construct($consolidatedLicenseId)
    {
        $this->consolidatedLicenseId = $consolidatedLicenseId;
    }

    /**
     * create a new instance of this class
     *
     * @var string|array $consolidatedLicenseId
     */
    public static function create($consolidatedLicenseId)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string|array
     */
    public function getConsolidatedLicenseId()
    {
        return $this->consolidatedLicenseId;
    }

    /**
     * @param string|array $consolidatedLicenseId
     * @return $this
     */
    public function setConsolidatedLicenseId($consolidatedLicenseId)
    {
        $this->consolidatedLicenseId = $consolidatedLicenseId;
        return $this;
    }
}

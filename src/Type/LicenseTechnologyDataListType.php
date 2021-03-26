<?php

namespace Flexsim\FlexnetOperations\Type;

class LicenseTechnologyDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseTechnologyDetailsType
     */
    private $licenseTechnology;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\LicenseTechnologyDetailsType|array $licenseTechnology
     */
    public function __construct($licenseTechnology = null)
    {
        $this->licenseTechnology = $licenseTechnology;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\LicenseTechnologyDetailsType|array $licenseTechnology
     */
    public static function create($licenseTechnology = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LicenseTechnologyDetailsType
     */
    public function getLicenseTechnology()
    {
        return $this->licenseTechnology;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LicenseTechnologyDetailsType $licenseTechnology
     * @return $this
     */
    public function setLicenseTechnology($licenseTechnology)
    {
        $this->licenseTechnology = $licenseTechnology;
        return $this;
    }


}


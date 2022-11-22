<?php

namespace Flexsim\FlexnetOperations\Type;

class ConsolidatedHostLicenseDataType extends FlexnetType
{
    /**
     * @var string
     */
    protected $license;

    /**
     * Constructor
     *
     * @param  string  $license
     */
    public function __construct(string $license)
    {
        $this->license = $license;
    }

    /**
     * create a new instance of this class
     *
     * @param  string  $license
     */
    public static function create(string $license)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * @param  string  $license
     * @return $this
     */
    public function setLicense($license)
    {
        $this->license = $license;

        return $this;
    }
}

<?php

namespace Flexsim\FlexnetOperations\Type;

class VirtualLicensePolicyDataType extends FlexnetType
{
    /**
     * @var bool
     */
    protected $isVirtualLicense;

    /**
     * Constructor
     *
     * @param bool $isVirtualLicense
     */
    public function __construct(bool $isVirtualLicense)
    {
        $this->isVirtualLicense = $isVirtualLicense;
    }

    /**
     * create a new instance of this class
     *
     * @param bool $isVirtualLicense
     */
    public static function create(bool $isVirtualLicense)
    {
        return new self(...func_get_args());
    }

    /**
     * @return bool
     */
    public function getIsVirtualLicense()
    {
        return $this->isVirtualLicense;
    }

    /**
     * @param bool $isVirtualLicense
     * @return $this
     */
    public function setIsVirtualLicense($isVirtualLicense)
    {
        $this->isVirtualLicense = $isVirtualLicense;

        return $this;
    }
}

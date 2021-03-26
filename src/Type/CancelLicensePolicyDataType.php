<?php

namespace Flexsim\FlexnetOperations\Type;

class CancelLicensePolicyDataType
{

    /**
     * @var bool
     */
    private $isCancelLicense;

    /**
     * Constructor
     *
     * @var bool $isCancelLicense
     */
    public function __construct(bool $isCancelLicense)
    {
        $this->isCancelLicense = $isCancelLicense;
    }

    /**
     * create a new instance of this class
     *
     * @var bool $isCancelLicense
     */
    public static function create(bool $isCancelLicense)
    {
        return new self(...func_get_args());
    }

    /**
     * @return bool
     */
    public function getIsCancelLicense()
    {
        return $this->isCancelLicense;
    }

    /**
     * @param bool $isCancelLicense
     * @return $this
     */
    public function setIsCancelLicense($isCancelLicense)
    {
        $this->isCancelLicense = $isCancelLicense;
        return $this;
    }


}


<?php

namespace Flexnet\LicenseService\Type;

class ActivationDataType
{
    /**
     * @var string
     */
    private $activationData;

    /**
     * Constructor
     *
     * @param string $activationData
     */
    public function __construct(string $activationData)
    {
        $this->activationData = $activationData;
    }

    /**
     * @param string $activationData
     */
    public static function create(string $activationData)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string
     */
    public function getActivationData() : string
    {
        return $this->activationData;
    }

    /**
     * @param string $activationData
     * @return ActivationDataType
     */
    public function withActivationData(string $activationData) : \Flexnet\LicenseService\Type\ActivationDataType
    {
        $new = clone $this;
        $new->activationData = $activationData;

        return $new;
    }
}


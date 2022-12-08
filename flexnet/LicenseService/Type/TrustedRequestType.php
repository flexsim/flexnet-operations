<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TrustedRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\ActivationDataType
     */
    private $inputData;

    /**
     * Constructor
     *
     * @param \Flexnet\LicenseService\Type\ActivationDataType $inputData
     */
    public function __construct(\Flexnet\LicenseService\Type\ActivationDataType $inputData)
    {
        $this->inputData = $inputData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\ActivationDataType $inputData
     */
    public static function create(\Flexnet\LicenseService\Type\ActivationDataType $inputData)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\ActivationDataType
     */
    public function getInputData() : \Flexnet\LicenseService\Type\ActivationDataType
    {
        return $this->inputData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\ActivationDataType $inputData
     * @return TrustedRequestType
     */
    public function withInputData(\Flexnet\LicenseService\Type\ActivationDataType $inputData) : \Flexnet\LicenseService\Type\TrustedRequestType
    {
        $new = clone $this;
        $new->inputData = $inputData;

        return $new;
    }
}


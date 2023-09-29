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
     */
    public function __construct(ActivationDataType $inputData)
    {
        $this->inputData = $inputData;
    }

    public static function create(ActivationDataType $inputData)
    {
        return new static(...\func_get_args());
    }

    public function getInputData(): ActivationDataType
    {
        return $this->inputData;
    }

    public function withInputData(ActivationDataType $inputData): TrustedRequestType
    {
        $new = clone $this;
        $new->inputData = $inputData;

        return $new;
    }
}

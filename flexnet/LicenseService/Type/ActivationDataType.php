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
     */
    public function __construct(string $activationData)
    {
        $this->activationData = $activationData;
    }

    public static function create(string $activationData)
    {
        return new static(...\func_get_args());
    }

    public function getActivationData(): string
    {
        return $this->activationData;
    }

    public function withActivationData(string $activationData): ActivationDataType
    {
        $new = clone $this;
        $new->activationData = $activationData;

        return $new;
    }
}

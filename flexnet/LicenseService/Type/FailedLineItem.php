<?php

namespace Flexnet\LicenseService\Type;

class FailedLineItem
{
    /**
     * @var string|null
     */
    private $activationId;

    /**
     * Constructor
     */
    public function __construct(?string $activationId = null)
    {
        $this->activationId = $activationId;
    }

    public static function create(?string $activationId = null)
    {
        return new static(...\func_get_args());
    }

    public function getActivationId(): ?string
    {
        return $this->activationId;
    }

    public function withActivationId(?string $activationId): \Flexnet\LicenseService\Type\FailedLineItem
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }
}

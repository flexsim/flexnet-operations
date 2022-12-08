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
     *
     * @param string|null $activationId
     */
    public function __construct(string|null $activationId = null)
    {
        $this->activationId = $activationId;
    }

    /**
     * @param string|null $activationId
     */
    public static function create(string|null $activationId = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string|null
     */
    public function getActivationId() : string|null
    {
        return $this->activationId;
    }

    /**
     * @param string|null $activationId
     * @return FailedLineItem
     */
    public function withActivationId(string|null $activationId) : \Flexnet\LicenseService\Type\FailedLineItem
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }
}


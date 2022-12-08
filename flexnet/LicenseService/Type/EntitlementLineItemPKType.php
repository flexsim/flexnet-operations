<?php

namespace Flexnet\LicenseService\Type;

class EntitlementLineItemPKType
{
    /**
     * @var string
     */
    private $activationId;

    /**
     * Constructor
     *
     * @param string $activationId
     */
    public function __construct(string $activationId)
    {
        $this->activationId = $activationId;
    }

    /**
     * @param string $activationId
     */
    public static function create(string $activationId)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string
     */
    public function getActivationId() : string
    {
        return $this->activationId;
    }

    /**
     * @param string $activationId
     * @return EntitlementLineItemPKType
     */
    public function withActivationId(string $activationId) : \Flexnet\LicenseService\Type\EntitlementLineItemPKType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }
}


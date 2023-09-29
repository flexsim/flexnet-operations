<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetExactAvailableCountRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|null
     */
    private $activationId;

    /**
     * Constructor
     */
    public function __construct(EntitlementLineItemIdentifierType $activationId = null)
    {
        $this->activationId = $activationId;
    }

    public static function create(EntitlementLineItemIdentifierType $activationId = null)
    {
        return new static(...\func_get_args());
    }

    public function getActivationId(): ?EntitlementLineItemIdentifierType
    {
        return $this->activationId;
    }

    public function withActivationId(?EntitlementLineItemIdentifierType $activationId): GetExactAvailableCountRequestType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }
}

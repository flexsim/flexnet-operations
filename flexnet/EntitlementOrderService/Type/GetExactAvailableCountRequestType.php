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
    public function __construct(?\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $activationId = null)
    {
        $this->activationId = $activationId;
    }

    public static function create(?\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $activationId = null)
    {
        return new static(...\func_get_args());
    }

    public function getActivationId(): ?\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType
    {
        return $this->activationId;
    }

    public function withActivationId(?\Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType $activationId): \Flexnet\EntitlementOrderService\Type\GetExactAvailableCountRequestType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }
}

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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|null  $activationId
     */
    public function __construct(EntitlementLineItemIdentifierType|null $activationId = null)
    {
        $this->activationId = $activationId;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|null  $activationId
     */
    public static function create(EntitlementLineItemIdentifierType|null $activationId = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|null
     */
    public function getActivationId(): EntitlementLineItemIdentifierType|null
    {
        return $this->activationId;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemIdentifierType|null  $activationId
     * @return GetExactAvailableCountRequestType
     */
    public function withActivationId(EntitlementLineItemIdentifierType|null $activationId): GetExactAvailableCountRequestType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }
}

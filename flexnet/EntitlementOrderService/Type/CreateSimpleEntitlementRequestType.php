<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateSimpleEntitlementRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType>
     */
    private $simpleEntitlement;

    /**
     * @var string|null
     */
    private $opType;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType>  $simpleEntitlement
     */
    public function __construct(CreateSimpleEntitlementDataType|array $simpleEntitlement, string $opType = null)
    {
        $this->simpleEntitlement = $simpleEntitlement;
        $this->opType = $opType;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType>  $simpleEntitlement
     */
    public static function create(CreateSimpleEntitlementDataType|array $simpleEntitlement, string $opType = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType>
     */
    public function getSimpleEntitlement(): CreateSimpleEntitlementDataType|array
    {
        return $this->simpleEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType>  $simpleEntitlement
     */
    public function withSimpleEntitlement(CreateSimpleEntitlementDataType|array $simpleEntitlement): CreateSimpleEntitlementRequestType
    {
        $new = clone $this;
        $new->simpleEntitlement = $simpleEntitlement;

        return $new;
    }

    public function getOpType(): ?string
    {
        return $this->opType;
    }

    public function withOpType(?string $opType): CreateSimpleEntitlementRequestType
    {
        $new = clone $this;
        $new->opType = $opType;

        return $new;
    }
}

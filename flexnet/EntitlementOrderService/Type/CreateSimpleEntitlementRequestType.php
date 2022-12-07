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
     * @param  \Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType>  $simpleEntitlement
     * @param  string|null  $opType
     */
    public static function create(CreateSimpleEntitlementDataType|array $simpleEntitlement, string|null $opType = null)
    {
        return new static(...\func_get_args());
    }

    public function __construct(CreateSimpleEntitlementDataType $simpleEntitlement, string $opType)
    {
        $this->simpleEntitlement = $simpleEntitlement;
        $this->opType = $opType;
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
     * @return CreateSimpleEntitlementRequestType
     */
    public function withSimpleEntitlement(CreateSimpleEntitlementDataType|array $simpleEntitlement): CreateSimpleEntitlementRequestType
    {
        $new = clone $this;
        $new->simpleEntitlement = $simpleEntitlement;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getOpType(): string|null
    {
        return $this->opType;
    }

    /**
     * @param  string|null  $opType
     * @return CreateSimpleEntitlementRequestType
     */
    public function withOpType(string|null $opType): CreateSimpleEntitlementRequestType
    {
        $new = clone $this;
        $new->opType = $opType;

        return $new;
    }
}

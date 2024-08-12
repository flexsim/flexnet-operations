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
     * @var \Flexnet\EntitlementOrderService\Type\CreateOrUpdateOperationType|null
     */
    private $opType;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType>  $simpleEntitlement
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType|array $simpleEntitlement, ?\Flexnet\EntitlementOrderService\Type\CreateOrUpdateOperationType $opType = null)
    {
        $this->simpleEntitlement = $simpleEntitlement;
        $this->opType = $opType;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType>  $simpleEntitlement
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType|array $simpleEntitlement, ?\Flexnet\EntitlementOrderService\Type\CreateOrUpdateOperationType $opType = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType>
     */
    public function getSimpleEntitlement(): \Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType|array
    {
        return $this->simpleEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType>  $simpleEntitlement
     */
    public function withSimpleEntitlement(\Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType|array $simpleEntitlement): \Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementRequestType
    {
        $new = clone $this;
        $new->simpleEntitlement = $simpleEntitlement;

        return $new;
    }

    public function getOpType(): ?\Flexnet\EntitlementOrderService\Type\CreateOrUpdateOperationType
    {
        return $this->opType;
    }

    public function withOpType(?\Flexnet\EntitlementOrderService\Type\CreateOrUpdateOperationType $opType): \Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementRequestType
    {
        $new = clone $this;
        $new->opType = $opType;

        return $new;
    }
}

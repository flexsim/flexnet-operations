<?php

namespace Flexnet\EntitlementOrderService\Type;

use Flexnet\EntitlementOrderService\Result;

class SearchEntitlementLineItemPropertiesResponseType extends Result
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementLineItemPropertiesType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemPropertiesType>|null
     */
    private $entitlementLineItem;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemPropertiesType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemPropertiesType>|null  $entitlementLineItem
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo, \Flexnet\EntitlementOrderService\Type\EntitlementLineItemPropertiesType|array|null $entitlementLineItem = null)
    {
        $this->statusInfo = $statusInfo;
        $this->entitlementLineItem = $entitlementLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemPropertiesType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemPropertiesType>|null  $entitlementLineItem
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo, \Flexnet\EntitlementOrderService\Type\EntitlementLineItemPropertiesType|array|null $entitlementLineItem = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): \Flexnet\EntitlementOrderService\Type\StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo): \Flexnet\EntitlementOrderService\Type\SearchEntitlementLineItemPropertiesResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementLineItemPropertiesType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemPropertiesType>|null
     */
    public function getEntitlementLineItem(): \Flexnet\EntitlementOrderService\Type\EntitlementLineItemPropertiesType|array|null
    {
        return $this->entitlementLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemPropertiesType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemPropertiesType>|null  $entitlementLineItem
     */
    public function withEntitlementLineItem(\Flexnet\EntitlementOrderService\Type\EntitlementLineItemPropertiesType|array|null $entitlementLineItem): \Flexnet\EntitlementOrderService\Type\SearchEntitlementLineItemPropertiesResponseType
    {
        $new = clone $this;
        $new->entitlementLineItem = $entitlementLineItem;

        return $new;
    }
}

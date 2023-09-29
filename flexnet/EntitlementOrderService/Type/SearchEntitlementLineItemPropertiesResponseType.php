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
    public function __construct(StatusInfoType $statusInfo, EntitlementLineItemPropertiesType|array $entitlementLineItem = null)
    {
        $this->statusInfo = $statusInfo;
        $this->entitlementLineItem = $entitlementLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemPropertiesType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemPropertiesType>|null  $entitlementLineItem
     */
    public static function create(StatusInfoType $statusInfo, EntitlementLineItemPropertiesType|array $entitlementLineItem = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): SearchEntitlementLineItemPropertiesResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementLineItemPropertiesType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemPropertiesType>|null
     */
    public function getEntitlementLineItem(): EntitlementLineItemPropertiesType|array|null
    {
        return $this->entitlementLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemPropertiesType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemPropertiesType>|null  $entitlementLineItem
     */
    public function withEntitlementLineItem(EntitlementLineItemPropertiesType|array|null $entitlementLineItem): SearchEntitlementLineItemPropertiesResponseType
    {
        $new = clone $this;
        $new->entitlementLineItem = $entitlementLineItem;

        return $new;
    }
}

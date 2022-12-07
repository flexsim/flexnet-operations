<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SearchEntitlementLineItemPropertiesResponseType implements ResultInterface
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
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemPropertiesType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemPropertiesType>|null  $entitlementLineItem
     */
    public function __construct(StatusInfoType $statusInfo, EntitlementLineItemPropertiesType|array|null $entitlementLineItem = null)
    {
        $this->statusInfo = $statusInfo;
        $this->entitlementLineItem = $entitlementLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLineItemPropertiesType|array<\Flexnet\EntitlementOrderService\Type\EntitlementLineItemPropertiesType>|null  $entitlementLineItem
     */
    public static function create(StatusInfoType $statusInfo, EntitlementLineItemPropertiesType|array|null $entitlementLineItem = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @return SearchEntitlementLineItemPropertiesResponseType
     */
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
     * @return SearchEntitlementLineItemPropertiesResponseType
     */
    public function withEntitlementLineItem(EntitlementLineItemPropertiesType|array|null $entitlementLineItem): SearchEntitlementLineItemPropertiesResponseType
    {
        $new = clone $this;
        $new->entitlementLineItem = $entitlementLineItem;

        return $new;
    }
}

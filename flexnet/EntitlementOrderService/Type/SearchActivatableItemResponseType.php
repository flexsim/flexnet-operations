<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SearchActivatableItemResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\ActivatableItemDetailType|array<\Flexnet\EntitlementOrderService\Type\ActivatableItemDetailType>|null
     */
    private $activatableItem;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\ActivatableItemDetailType|array<\Flexnet\EntitlementOrderService\Type\ActivatableItemDetailType>|null  $activatableItem
     */
    public function __construct(StatusInfoType $statusInfo, ActivatableItemDetailType|array|null $activatableItem = null)
    {
        $this->statusInfo = $statusInfo;
        $this->activatableItem = $activatableItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\ActivatableItemDetailType|array<\Flexnet\EntitlementOrderService\Type\ActivatableItemDetailType>|null  $activatableItem
     */
    public static function create(StatusInfoType $statusInfo, ActivatableItemDetailType|array|null $activatableItem = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): SearchActivatableItemResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getActivatableItem(): ActivatableItemDetailType|array|null
    {
        return $this->activatableItem;
    }

    public function withActivatableItem(ActivatableItemDetailType|array|null $activatableItem): SearchActivatableItemResponseType
    {
        $new = clone $this;
        $new->activatableItem = $activatableItem;

        return $new;
    }
}

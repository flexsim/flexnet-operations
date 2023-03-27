<?php

namespace Flexnet\EntitlementOrderService\Type;

use Flexnet\EntitlementOrderService\Result;

class SearchActivatableItemResponseType extends Result
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

    /**
     * @return \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     */
    public function withStatusInfo(StatusInfoType $statusInfo): SearchActivatableItemResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\ActivatableItemDetailType|array<\Flexnet\EntitlementOrderService\Type\ActivatableItemDetailType>|null
     */
    public function getActivatableItem(): ActivatableItemDetailType|array|null
    {
        return $this->activatableItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\ActivatableItemDetailType|array<\Flexnet\EntitlementOrderService\Type\ActivatableItemDetailType>|null  $activatableItem
     */
    public function withActivatableItem(ActivatableItemDetailType|array|null $activatableItem): SearchActivatableItemResponseType
    {
        $new = clone $this;
        $new->activatableItem = $activatableItem;

        return $new;
    }
}

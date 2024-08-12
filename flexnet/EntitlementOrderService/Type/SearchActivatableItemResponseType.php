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
     * @param  \Flexnet\EntitlementOrderService\Type\ActivatableItemDetailType|array<\Flexnet\EntitlementOrderService\Type\ActivatableItemDetailType>|null  $activatableItem
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo, \Flexnet\EntitlementOrderService\Type\ActivatableItemDetailType|array|null $activatableItem = null)
    {
        $this->statusInfo = $statusInfo;
        $this->activatableItem = $activatableItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\ActivatableItemDetailType|array<\Flexnet\EntitlementOrderService\Type\ActivatableItemDetailType>|null  $activatableItem
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo, \Flexnet\EntitlementOrderService\Type\ActivatableItemDetailType|array|null $activatableItem = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): \Flexnet\EntitlementOrderService\Type\StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo): \Flexnet\EntitlementOrderService\Type\SearchActivatableItemResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\ActivatableItemDetailType|array<\Flexnet\EntitlementOrderService\Type\ActivatableItemDetailType>|null
     */
    public function getActivatableItem(): \Flexnet\EntitlementOrderService\Type\ActivatableItemDetailType|array|null
    {
        return $this->activatableItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\ActivatableItemDetailType|array<\Flexnet\EntitlementOrderService\Type\ActivatableItemDetailType>|null  $activatableItem
     */
    public function withActivatableItem(\Flexnet\EntitlementOrderService\Type\ActivatableItemDetailType|array|null $activatableItem): \Flexnet\EntitlementOrderService\Type\SearchActivatableItemResponseType
    {
        $new = clone $this;
        $new->activatableItem = $activatableItem;

        return $new;
    }
}

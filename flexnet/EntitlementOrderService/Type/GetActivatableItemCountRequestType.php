<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetActivatableItemCountRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType
     */
    private $queryParams;

    /**
     * @var bool|null
     */
    private $restrictToItemsReadyToActivate;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType $queryParams, ?bool $restrictToItemsReadyToActivate = null)
    {
        $this->queryParams = $queryParams;
        $this->restrictToItemsReadyToActivate = $restrictToItemsReadyToActivate;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType $queryParams, ?bool $restrictToItemsReadyToActivate = null)
    {
        return new static(...\func_get_args());
    }

    public function getQueryParams(): \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType
    {
        return $this->queryParams;
    }

    public function withQueryParams(\Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType $queryParams): \Flexnet\EntitlementOrderService\Type\GetActivatableItemCountRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }

    public function getRestrictToItemsReadyToActivate(): ?bool
    {
        return $this->restrictToItemsReadyToActivate;
    }

    public function withRestrictToItemsReadyToActivate(?bool $restrictToItemsReadyToActivate): \Flexnet\EntitlementOrderService\Type\GetActivatableItemCountRequestType
    {
        $new = clone $this;
        $new->restrictToItemsReadyToActivate = $restrictToItemsReadyToActivate;

        return $new;
    }
}

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
     * @param  \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType  $queryParams
     * @param  bool|null  $restrictToItemsReadyToActivate
     */
    public static function create(SearchActivatableItemDataType $queryParams, bool|null $restrictToItemsReadyToActivate = null)
    {
        return new static(...\func_get_args());
    }

    public function __construct(SearchActivatableItemDataType $queryParams, bool $restrictToItemsReadyToActivate)
    {
        $this->queryParams = $queryParams;
        $this->restrictToItemsReadyToActivate = $restrictToItemsReadyToActivate;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType
     */
    public function getQueryParams(): SearchActivatableItemDataType
    {
        return $this->queryParams;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SearchActivatableItemDataType  $queryParams
     * @return GetActivatableItemCountRequestType
     */
    public function withQueryParams(SearchActivatableItemDataType $queryParams): GetActivatableItemCountRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getRestrictToItemsReadyToActivate(): bool|null
    {
        return $this->restrictToItemsReadyToActivate;
    }

    /**
     * @param  bool|null  $restrictToItemsReadyToActivate
     * @return GetActivatableItemCountRequestType
     */
    public function withRestrictToItemsReadyToActivate(bool|null $restrictToItemsReadyToActivate): GetActivatableItemCountRequestType
    {
        $new = clone $this;
        $new->restrictToItemsReadyToActivate = $restrictToItemsReadyToActivate;

        return $new;
    }
}

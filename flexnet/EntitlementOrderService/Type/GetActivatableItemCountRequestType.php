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
    public function __construct(SearchActivatableItemDataType $queryParams, bool $restrictToItemsReadyToActivate = null)
    {
        $this->queryParams = $queryParams;
        $this->restrictToItemsReadyToActivate = $restrictToItemsReadyToActivate;
    }

    public static function create(SearchActivatableItemDataType $queryParams, bool $restrictToItemsReadyToActivate = null)
    {
        return new static(...\func_get_args());
    }

    public function getQueryParams(): SearchActivatableItemDataType
    {
        return $this->queryParams;
    }

    public function withQueryParams(SearchActivatableItemDataType $queryParams): GetActivatableItemCountRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }

    public function getRestrictToItemsReadyToActivate(): ?bool
    {
        return $this->restrictToItemsReadyToActivate;
    }

    public function withRestrictToItemsReadyToActivate(?bool $restrictToItemsReadyToActivate): GetActivatableItemCountRequestType
    {
        $new = clone $this;
        $new->restrictToItemsReadyToActivate = $restrictToItemsReadyToActivate;

        return $new;
    }
}

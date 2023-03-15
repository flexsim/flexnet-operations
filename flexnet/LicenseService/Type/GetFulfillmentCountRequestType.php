<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetFulfillmentCountRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType|null
     */
    private $queryParams;

    /**
     * @var bool|null
     */
    private $excludeInactiveObsoleteLineItems;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType|null  $queryParams
     * @param  bool|null  $excludeInactiveObsoleteLineItems
     */
    public function __construct(FulfillmentsQueryParametersType|null $queryParams = null, bool|null $excludeInactiveObsoleteLineItems = null)
    {
        $this->queryParams = $queryParams;
        $this->excludeInactiveObsoleteLineItems = $excludeInactiveObsoleteLineItems;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType|null  $queryParams
     * @param  bool|null  $excludeInactiveObsoleteLineItems
     */
    public static function create(FulfillmentsQueryParametersType|null $queryParams = null, bool|null $excludeInactiveObsoleteLineItems = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType|null
     */
    public function getQueryParams(): FulfillmentsQueryParametersType|null
    {
        return $this->queryParams;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType|null  $queryParams
     */
    public function withQueryParams(FulfillmentsQueryParametersType|null $queryParams): GetFulfillmentCountRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }

    public function getExcludeInactiveObsoleteLineItems(): bool|null
    {
        return $this->excludeInactiveObsoleteLineItems;
    }

    public function withExcludeInactiveObsoleteLineItems(bool|null $excludeInactiveObsoleteLineItems): GetFulfillmentCountRequestType
    {
        $new = clone $this;
        $new->excludeInactiveObsoleteLineItems = $excludeInactiveObsoleteLineItems;

        return $new;
    }
}

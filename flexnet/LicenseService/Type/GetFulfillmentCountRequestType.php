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
     * @param \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType|null $queryParams
     * @param bool|null $excludeInactiveObsoleteLineItems
     */
    public function __construct(\Flexnet\LicenseService\Type\FulfillmentsQueryParametersType|null $queryParams = null, bool|null $excludeInactiveObsoleteLineItems = null)
    {
        $this->queryParams = $queryParams;
        $this->excludeInactiveObsoleteLineItems = $excludeInactiveObsoleteLineItems;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType|null $queryParams
     * @param bool|null $excludeInactiveObsoleteLineItems
     */
    public static function create(\Flexnet\LicenseService\Type\FulfillmentsQueryParametersType|null $queryParams = null, bool|null $excludeInactiveObsoleteLineItems = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType|null
     */
    public function getQueryParams() : \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType|null
    {
        return $this->queryParams;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FulfillmentsQueryParametersType|null $queryParams
     * @return GetFulfillmentCountRequestType
     */
    public function withQueryParams(\Flexnet\LicenseService\Type\FulfillmentsQueryParametersType|null $queryParams) : \Flexnet\LicenseService\Type\GetFulfillmentCountRequestType
    {
        $new = clone $this;
        $new->queryParams = $queryParams;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getExcludeInactiveObsoleteLineItems() : bool|null
    {
        return $this->excludeInactiveObsoleteLineItems;
    }

    /**
     * @param bool|null $excludeInactiveObsoleteLineItems
     * @return GetFulfillmentCountRequestType
     */
    public function withExcludeInactiveObsoleteLineItems(bool|null $excludeInactiveObsoleteLineItems) : \Flexnet\LicenseService\Type\GetFulfillmentCountRequestType
    {
        $new = clone $this;
        $new->excludeInactiveObsoleteLineItems = $excludeInactiveObsoleteLineItems;

        return $new;
    }
}


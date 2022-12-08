<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class AdvancedFulfillmentLCRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\AdvancedFulfillmentLCListType
     */
    private $fulfillmentList;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\AdvancedFulfillmentLCListType  $fulfillmentList
     */
    public function __construct(AdvancedFulfillmentLCListType $fulfillmentList)
    {
        $this->fulfillmentList = $fulfillmentList;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\AdvancedFulfillmentLCListType  $fulfillmentList
     */
    public static function create(AdvancedFulfillmentLCListType $fulfillmentList)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\AdvancedFulfillmentLCListType
     */
    public function getFulfillmentList(): AdvancedFulfillmentLCListType
    {
        return $this->fulfillmentList;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\AdvancedFulfillmentLCListType  $fulfillmentList
     * @return AdvancedFulfillmentLCRequestType
     */
    public function withFulfillmentList(AdvancedFulfillmentLCListType $fulfillmentList): AdvancedFulfillmentLCRequestType
    {
        $new = clone $this;
        $new->fulfillmentList = $fulfillmentList;

        return $new;
    }
}

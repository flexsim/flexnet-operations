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
     */
    public function __construct(AdvancedFulfillmentLCListType $fulfillmentList)
    {
        $this->fulfillmentList = $fulfillmentList;
    }

    public static function create(AdvancedFulfillmentLCListType $fulfillmentList)
    {
        return new static(...\func_get_args());
    }

    public function getFulfillmentList(): AdvancedFulfillmentLCListType
    {
        return $this->fulfillmentList;
    }

    public function withFulfillmentList(AdvancedFulfillmentLCListType $fulfillmentList): AdvancedFulfillmentLCRequestType
    {
        $new = clone $this;
        $new->fulfillmentList = $fulfillmentList;

        return $new;
    }
}

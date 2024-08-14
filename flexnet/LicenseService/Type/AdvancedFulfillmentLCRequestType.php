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
    public function __construct(\Flexnet\LicenseService\Type\AdvancedFulfillmentLCListType $fulfillmentList)
    {
        $this->fulfillmentList = $fulfillmentList;
    }

    public static function create(\Flexnet\LicenseService\Type\AdvancedFulfillmentLCListType $fulfillmentList)
    {
        return new static(...\func_get_args());
    }

    public function getFulfillmentList(): \Flexnet\LicenseService\Type\AdvancedFulfillmentLCListType
    {
        return $this->fulfillmentList;
    }

    public function withFulfillmentList(\Flexnet\LicenseService\Type\AdvancedFulfillmentLCListType $fulfillmentList): \Flexnet\LicenseService\Type\AdvancedFulfillmentLCRequestType
    {
        $new = clone $this;
        $new->fulfillmentList = $fulfillmentList;

        return $new;
    }
}

<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetLicenseRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\OnholdFulfillmentListType
     */
    private $onholdFulfillmentList;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\LicenseService\Type\OnholdFulfillmentListType $onholdFulfillmentList)
    {
        $this->onholdFulfillmentList = $onholdFulfillmentList;
    }

    public static function create(\Flexnet\LicenseService\Type\OnholdFulfillmentListType $onholdFulfillmentList)
    {
        return new static(...\func_get_args());
    }

    public function getOnholdFulfillmentList(): \Flexnet\LicenseService\Type\OnholdFulfillmentListType
    {
        return $this->onholdFulfillmentList;
    }

    public function withOnholdFulfillmentList(\Flexnet\LicenseService\Type\OnholdFulfillmentListType $onholdFulfillmentList): \Flexnet\LicenseService\Type\SetLicenseRequestType
    {
        $new = clone $this;
        $new->onholdFulfillmentList = $onholdFulfillmentList;

        return $new;
    }
}

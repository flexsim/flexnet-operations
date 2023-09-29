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
    public function __construct(OnholdFulfillmentListType $onholdFulfillmentList)
    {
        $this->onholdFulfillmentList = $onholdFulfillmentList;
    }

    public static function create(OnholdFulfillmentListType $onholdFulfillmentList)
    {
        return new static(...\func_get_args());
    }

    public function getOnholdFulfillmentList(): OnholdFulfillmentListType
    {
        return $this->onholdFulfillmentList;
    }

    public function withOnholdFulfillmentList(OnholdFulfillmentListType $onholdFulfillmentList): SetLicenseRequestType
    {
        $new = clone $this;
        $new->onholdFulfillmentList = $onholdFulfillmentList;

        return $new;
    }
}

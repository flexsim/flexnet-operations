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
     *
     * @param  \Flexnet\LicenseService\Type\OnholdFulfillmentListType  $onholdFulfillmentList
     */
    public function __construct(OnholdFulfillmentListType $onholdFulfillmentList)
    {
        $this->onholdFulfillmentList = $onholdFulfillmentList;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\OnholdFulfillmentListType  $onholdFulfillmentList
     */
    public static function create(OnholdFulfillmentListType $onholdFulfillmentList)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\OnholdFulfillmentListType
     */
    public function getOnholdFulfillmentList(): OnholdFulfillmentListType
    {
        return $this->onholdFulfillmentList;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\OnholdFulfillmentListType  $onholdFulfillmentList
     */
    public function withOnholdFulfillmentList(OnholdFulfillmentListType $onholdFulfillmentList): SetLicenseRequestType
    {
        $new = clone $this;
        $new->onholdFulfillmentList = $onholdFulfillmentList;

        return $new;
    }
}

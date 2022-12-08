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
     * @param \Flexnet\LicenseService\Type\OnholdFulfillmentListType $onholdFulfillmentList
     */
    public function __construct(\Flexnet\LicenseService\Type\OnholdFulfillmentListType $onholdFulfillmentList)
    {
        $this->onholdFulfillmentList = $onholdFulfillmentList;
    }

    /**
     * @param \Flexnet\LicenseService\Type\OnholdFulfillmentListType $onholdFulfillmentList
     */
    public static function create(\Flexnet\LicenseService\Type\OnholdFulfillmentListType $onholdFulfillmentList)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\OnholdFulfillmentListType
     */
    public function getOnholdFulfillmentList() : \Flexnet\LicenseService\Type\OnholdFulfillmentListType
    {
        return $this->onholdFulfillmentList;
    }

    /**
     * @param \Flexnet\LicenseService\Type\OnholdFulfillmentListType $onholdFulfillmentList
     * @return SetLicenseRequestType
     */
    public function withOnholdFulfillmentList(\Flexnet\LicenseService\Type\OnholdFulfillmentListType $onholdFulfillmentList) : \Flexnet\LicenseService\Type\SetLicenseRequestType
    {
        $new = clone $this;
        $new->onholdFulfillmentList = $onholdFulfillmentList;

        return $new;
    }
}


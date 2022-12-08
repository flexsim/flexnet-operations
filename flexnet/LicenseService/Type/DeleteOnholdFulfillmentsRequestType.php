<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteOnholdFulfillmentsRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\FulfillmentIdListType
     */
    private $fulfillmentIdList;

    /**
     * Constructor
     *
     * @param \Flexnet\LicenseService\Type\FulfillmentIdListType $fulfillmentIdList
     */
    public function __construct(\Flexnet\LicenseService\Type\FulfillmentIdListType $fulfillmentIdList)
    {
        $this->fulfillmentIdList = $fulfillmentIdList;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FulfillmentIdListType $fulfillmentIdList
     */
    public static function create(\Flexnet\LicenseService\Type\FulfillmentIdListType $fulfillmentIdList)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentIdListType
     */
    public function getFulfillmentIdList() : \Flexnet\LicenseService\Type\FulfillmentIdListType
    {
        return $this->fulfillmentIdList;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FulfillmentIdListType $fulfillmentIdList
     * @return DeleteOnholdFulfillmentsRequestType
     */
    public function withFulfillmentIdList(\Flexnet\LicenseService\Type\FulfillmentIdListType $fulfillmentIdList) : \Flexnet\LicenseService\Type\DeleteOnholdFulfillmentsRequestType
    {
        $new = clone $this;
        $new->fulfillmentIdList = $fulfillmentIdList;

        return $new;
    }
}


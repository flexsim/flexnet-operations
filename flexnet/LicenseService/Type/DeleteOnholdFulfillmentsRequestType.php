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
     */
    public function __construct(FulfillmentIdListType $fulfillmentIdList)
    {
        $this->fulfillmentIdList = $fulfillmentIdList;
    }

    public static function create(FulfillmentIdListType $fulfillmentIdList)
    {
        return new static(...\func_get_args());
    }

    public function getFulfillmentIdList(): FulfillmentIdListType
    {
        return $this->fulfillmentIdList;
    }

    public function withFulfillmentIdList(FulfillmentIdListType $fulfillmentIdList): DeleteOnholdFulfillmentsRequestType
    {
        $new = clone $this;
        $new->fulfillmentIdList = $fulfillmentIdList;

        return $new;
    }
}

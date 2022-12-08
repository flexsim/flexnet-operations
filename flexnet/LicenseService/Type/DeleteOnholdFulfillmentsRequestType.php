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
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdListType  $fulfillmentIdList
     */
    public function __construct(FulfillmentIdListType $fulfillmentIdList)
    {
        $this->fulfillmentIdList = $fulfillmentIdList;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdListType  $fulfillmentIdList
     */
    public static function create(FulfillmentIdListType $fulfillmentIdList)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentIdListType
     */
    public function getFulfillmentIdList(): FulfillmentIdListType
    {
        return $this->fulfillmentIdList;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdListType  $fulfillmentIdList
     * @return DeleteOnholdFulfillmentsRequestType
     */
    public function withFulfillmentIdList(FulfillmentIdListType $fulfillmentIdList): DeleteOnholdFulfillmentsRequestType
    {
        $new = clone $this;
        $new->fulfillmentIdList = $fulfillmentIdList;

        return $new;
    }
}

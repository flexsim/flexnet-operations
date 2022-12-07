<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteWebRegKeyRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\WebRegKeysListType
     */
    private $webRegKeyList;

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\WebRegKeysListType  $webRegKeyList
     */
    public static function create(WebRegKeysListType $webRegKeyList)
    {
        return new static(...\func_get_args());
    }

    public function __construct(WebRegKeysListType $webRegKeyList)
    {
        $this->webRegKeyList = $webRegKeyList;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\WebRegKeysListType
     */
    public function getWebRegKeyList(): WebRegKeysListType
    {
        return $this->webRegKeyList;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\WebRegKeysListType  $webRegKeyList
     * @return DeleteWebRegKeyRequestType
     */
    public function withWebRegKeyList(WebRegKeysListType $webRegKeyList): DeleteWebRegKeyRequestType
    {
        $new = clone $this;
        $new->webRegKeyList = $webRegKeyList;

        return $new;
    }
}

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
     * Constructor
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\WebRegKeysListType $webRegKeyList)
    {
        $this->webRegKeyList = $webRegKeyList;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\WebRegKeysListType $webRegKeyList)
    {
        return new static(...\func_get_args());
    }

    public function getWebRegKeyList(): \Flexnet\EntitlementOrderService\Type\WebRegKeysListType
    {
        return $this->webRegKeyList;
    }

    public function withWebRegKeyList(\Flexnet\EntitlementOrderService\Type\WebRegKeysListType $webRegKeyList): \Flexnet\EntitlementOrderService\Type\DeleteWebRegKeyRequestType
    {
        $new = clone $this;
        $new->webRegKeyList = $webRegKeyList;

        return $new;
    }
}

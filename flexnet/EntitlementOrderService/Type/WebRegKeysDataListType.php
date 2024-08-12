<?php

namespace Flexnet\EntitlementOrderService\Type;

class WebRegKeysDataListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\WebRegKeyType|null
     */
    private $webRegKeys;

    /**
     * Constructor
     */
    public function __construct(?\Flexnet\EntitlementOrderService\Type\WebRegKeyType $webRegKeys = null)
    {
        $this->webRegKeys = $webRegKeys;
    }

    public static function create(?\Flexnet\EntitlementOrderService\Type\WebRegKeyType $webRegKeys = null)
    {
        return new static(...\func_get_args());
    }

    public function getWebRegKeys(): ?\Flexnet\EntitlementOrderService\Type\WebRegKeyType
    {
        return $this->webRegKeys;
    }

    public function withWebRegKeys(?\Flexnet\EntitlementOrderService\Type\WebRegKeyType $webRegKeys): \Flexnet\EntitlementOrderService\Type\WebRegKeysDataListType
    {
        $new = clone $this;
        $new->webRegKeys = $webRegKeys;

        return $new;
    }
}

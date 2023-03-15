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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\WebRegKeyType|null  $webRegKeys
     */
    public function __construct(WebRegKeyType|null $webRegKeys = null)
    {
        $this->webRegKeys = $webRegKeys;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\WebRegKeyType|null  $webRegKeys
     */
    public static function create(WebRegKeyType|null $webRegKeys = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\WebRegKeyType|null
     */
    public function getWebRegKeys(): WebRegKeyType|null
    {
        return $this->webRegKeys;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\WebRegKeyType|null  $webRegKeys
     */
    public function withWebRegKeys(WebRegKeyType|null $webRegKeys): WebRegKeysDataListType
    {
        $new = clone $this;
        $new->webRegKeys = $webRegKeys;

        return $new;
    }
}

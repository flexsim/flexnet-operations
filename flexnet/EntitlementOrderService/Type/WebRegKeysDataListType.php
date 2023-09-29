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
    public function __construct(WebRegKeyType $webRegKeys = null)
    {
        $this->webRegKeys = $webRegKeys;
    }

    public static function create(WebRegKeyType $webRegKeys = null)
    {
        return new static(...\func_get_args());
    }

    public function getWebRegKeys(): ?WebRegKeyType
    {
        return $this->webRegKeys;
    }

    public function withWebRegKeys(?WebRegKeyType $webRegKeys): WebRegKeysDataListType
    {
        $new = clone $this;
        $new->webRegKeys = $webRegKeys;

        return $new;
    }
}

<?php

namespace Flexnet\EntitlementOrderService\Type;

class WebRegKeysListType
{
    /**
     * @var string|array<string>|null
     */
    private $webRegKey;

    /**
     * Constructor
     *
     * @param  string|array<string>|null  $webRegKey
     */
    public function __construct(string|array $webRegKey = null)
    {
        $this->webRegKey = $webRegKey;
    }

    /**
     * @param  string|array<string>|null  $webRegKey
     */
    public static function create(string|array $webRegKey = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string|array<string>|null
     */
    public function getWebRegKey(): string|array|null
    {
        return $this->webRegKey;
    }

    /**
     * @param  string|array<string>|null  $webRegKey
     */
    public function withWebRegKey(string|array|null $webRegKey): WebRegKeysListType
    {
        $new = clone $this;
        $new->webRegKey = $webRegKey;

        return $new;
    }
}

<?php

namespace Flexnet\EntitlementOrderService\Type;

class WebRegKeyType
{
    /**
     * @var string|array<string>
     */
    private $webRegKey;

    /**
     * Constructor
     *
     * @param  string|array<string>  $webRegKey
     */
    public function __construct(string|array $webRegKey)
    {
        $this->webRegKey = $webRegKey;
    }

    /**
     * @param  string|array<string>  $webRegKey
     */
    public static function create(string|array $webRegKey)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string|array<string>
     */
    public function getWebRegKey(): string|array
    {
        return $this->webRegKey;
    }

    /**
     * @param  string|array<string>  $webRegKey
     * @return WebRegKeyType
     */
    public function withWebRegKey(string|array $webRegKey): WebRegKeyType
    {
        $new = clone $this;
        $new->webRegKey = $webRegKey;

        return $new;
    }
}

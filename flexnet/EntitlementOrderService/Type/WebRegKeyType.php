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

    public function getWebRegKey(): string|array
    {
        return $this->webRegKey;
    }

    public function withWebRegKey(string|array $webRegKey): WebRegKeyType
    {
        $new = clone $this;
        $new->webRegKey = $webRegKey;

        return $new;
    }
}

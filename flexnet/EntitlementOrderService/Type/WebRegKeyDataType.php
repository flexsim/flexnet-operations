<?php

namespace Flexnet\EntitlementOrderService\Type;

class WebRegKeyDataType
{
    /**
     * @var string|array<string>|null
     */
    private $webRegKey;

    /**
     * @var bool|null
     */
    private $autoGenerate;

    /**
     * @var int|null
     */
    private $numAutoGenerate;

    /**
     * Constructor
     *
     * @param  string|array<string>|null  $webRegKey
     */
    public function __construct(string|array|null $webRegKey = null, ?bool $autoGenerate = null, ?int $numAutoGenerate = null)
    {
        $this->webRegKey = $webRegKey;
        $this->autoGenerate = $autoGenerate;
        $this->numAutoGenerate = $numAutoGenerate;
    }

    /**
     * @param  string|array<string>|null  $webRegKey
     */
    public static function create(string|array|null $webRegKey = null, ?bool $autoGenerate = null, ?int $numAutoGenerate = null)
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
    public function withWebRegKey(string|array|null $webRegKey): \Flexnet\EntitlementOrderService\Type\WebRegKeyDataType
    {
        $new = clone $this;
        $new->webRegKey = $webRegKey;

        return $new;
    }

    public function getAutoGenerate(): ?bool
    {
        return $this->autoGenerate;
    }

    public function withAutoGenerate(?bool $autoGenerate): \Flexnet\EntitlementOrderService\Type\WebRegKeyDataType
    {
        $new = clone $this;
        $new->autoGenerate = $autoGenerate;

        return $new;
    }

    public function getNumAutoGenerate(): ?int
    {
        return $this->numAutoGenerate;
    }

    public function withNumAutoGenerate(?int $numAutoGenerate): \Flexnet\EntitlementOrderService\Type\WebRegKeyDataType
    {
        $new = clone $this;
        $new->numAutoGenerate = $numAutoGenerate;

        return $new;
    }
}

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
     * @param  bool|null  $autoGenerate
     * @param  int|null  $numAutoGenerate
     */
    public function __construct(string|array|null $webRegKey = null, bool|null $autoGenerate = null, int|null $numAutoGenerate = null)
    {
        $this->webRegKey = $webRegKey;
        $this->autoGenerate = $autoGenerate;
        $this->numAutoGenerate = $numAutoGenerate;
    }

    /**
     * @param  string|array<string>|null  $webRegKey
     * @param  bool|null  $autoGenerate
     * @param  int|null  $numAutoGenerate
     */
    public static function create(string|array|null $webRegKey = null, bool|null $autoGenerate = null, int|null $numAutoGenerate = null)
    {
        return new static(...\func_get_args());
    }

    public function getWebRegKey(): string|array|null
    {
        return $this->webRegKey;
    }

    public function withWebRegKey(string|array|null $webRegKey): WebRegKeyDataType
    {
        $new = clone $this;
        $new->webRegKey = $webRegKey;

        return $new;
    }

    public function getAutoGenerate(): bool|null
    {
        return $this->autoGenerate;
    }

    public function withAutoGenerate(bool|null $autoGenerate): WebRegKeyDataType
    {
        $new = clone $this;
        $new->autoGenerate = $autoGenerate;

        return $new;
    }

    public function getNumAutoGenerate(): int|null
    {
        return $this->numAutoGenerate;
    }

    public function withNumAutoGenerate(int|null $numAutoGenerate): WebRegKeyDataType
    {
        $new = clone $this;
        $new->numAutoGenerate = $numAutoGenerate;

        return $new;
    }
}

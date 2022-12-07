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

    /**
     * @return string|array<string>|null
     */
    public function getWebRegKey(): string|array|null
    {
        return $this->webRegKey;
    }

    /**
     * @param  string|array<string>|null  $webRegKey
     * @return WebRegKeyDataType
     */
    public function withWebRegKey(string|array|null $webRegKey): WebRegKeyDataType
    {
        $new = clone $this;
        $new->webRegKey = $webRegKey;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getAutoGenerate(): bool|null
    {
        return $this->autoGenerate;
    }

    /**
     * @param  bool|null  $autoGenerate
     * @return WebRegKeyDataType
     */
    public function withAutoGenerate(bool|null $autoGenerate): WebRegKeyDataType
    {
        $new = clone $this;
        $new->autoGenerate = $autoGenerate;

        return $new;
    }

    /**
     * @return int|null
     */
    public function getNumAutoGenerate(): int|null
    {
        return $this->numAutoGenerate;
    }

    /**
     * @param  int|null  $numAutoGenerate
     * @return WebRegKeyDataType
     */
    public function withNumAutoGenerate(int|null $numAutoGenerate): WebRegKeyDataType
    {
        $new = clone $this;
        $new->numAutoGenerate = $numAutoGenerate;

        return $new;
    }
}

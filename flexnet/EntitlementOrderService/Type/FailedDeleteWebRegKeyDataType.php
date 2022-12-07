<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedDeleteWebRegKeyDataType
{
    /**
     * @var string
     */
    private $webRegKey;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     *
     * @param  string  $webRegKey
     * @param  string|null  $reason
     */
    public function __construct(string $webRegKey, string|null $reason = null)
    {
        $this->webRegKey = $webRegKey;
        $this->reason = $reason;
    }

    /**
     * @param  string  $webRegKey
     * @param  string|null  $reason
     */
    public static function create(string $webRegKey, string|null $reason = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string
     */
    public function getWebRegKey(): string
    {
        return $this->webRegKey;
    }

    /**
     * @param  string  $webRegKey
     * @return FailedDeleteWebRegKeyDataType
     */
    public function withWebRegKey(string $webRegKey): FailedDeleteWebRegKeyDataType
    {
        $new = clone $this;
        $new->webRegKey = $webRegKey;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getReason(): string|null
    {
        return $this->reason;
    }

    /**
     * @param  string|null  $reason
     * @return FailedDeleteWebRegKeyDataType
     */
    public function withReason(string|null $reason): FailedDeleteWebRegKeyDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}

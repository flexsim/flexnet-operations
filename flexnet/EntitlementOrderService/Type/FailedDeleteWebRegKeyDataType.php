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
     */
    public function __construct(string $webRegKey, ?string $reason = null)
    {
        $this->webRegKey = $webRegKey;
        $this->reason = $reason;
    }

    public static function create(string $webRegKey, ?string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getWebRegKey(): string
    {
        return $this->webRegKey;
    }

    public function withWebRegKey(string $webRegKey): \Flexnet\EntitlementOrderService\Type\FailedDeleteWebRegKeyDataType
    {
        $new = clone $this;
        $new->webRegKey = $webRegKey;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): \Flexnet\EntitlementOrderService\Type\FailedDeleteWebRegKeyDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}

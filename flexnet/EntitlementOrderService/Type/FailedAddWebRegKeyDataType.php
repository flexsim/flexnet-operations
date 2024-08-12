<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedAddWebRegKeyDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType|null
     */
    private $webRegKeyData;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(?\Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType $webRegKeyData = null, ?string $reason = null)
    {
        $this->webRegKeyData = $webRegKeyData;
        $this->reason = $reason;
    }

    public static function create(?\Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType $webRegKeyData = null, ?string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getWebRegKeyData(): ?\Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType
    {
        return $this->webRegKeyData;
    }

    public function withWebRegKeyData(?\Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType $webRegKeyData): \Flexnet\EntitlementOrderService\Type\FailedAddWebRegKeyDataType
    {
        $new = clone $this;
        $new->webRegKeyData = $webRegKeyData;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): \Flexnet\EntitlementOrderService\Type\FailedAddWebRegKeyDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}

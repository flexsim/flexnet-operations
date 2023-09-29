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
    public function __construct(AddWebRegKeyDataType $webRegKeyData = null, string $reason = null)
    {
        $this->webRegKeyData = $webRegKeyData;
        $this->reason = $reason;
    }

    public static function create(AddWebRegKeyDataType $webRegKeyData = null, string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getWebRegKeyData(): ?AddWebRegKeyDataType
    {
        return $this->webRegKeyData;
    }

    public function withWebRegKeyData(?AddWebRegKeyDataType $webRegKeyData): FailedAddWebRegKeyDataType
    {
        $new = clone $this;
        $new->webRegKeyData = $webRegKeyData;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): FailedAddWebRegKeyDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}

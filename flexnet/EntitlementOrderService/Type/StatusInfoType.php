<?php

namespace Flexnet\EntitlementOrderService\Type;

class StatusInfoType
{
    /**
     * @var string
     */
    private $status;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(string $status, ?string $reason = null)
    {
        $this->status = $status;
        $this->reason = $reason;
    }

    public static function create(string $status, ?string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function withStatus(string $status): \Flexnet\EntitlementOrderService\Type\StatusInfoType
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): \Flexnet\EntitlementOrderService\Type\StatusInfoType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}

<?php

namespace Flexnet\EntitlementOrderService\Type;

class StatusInfoType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\StatusType
     */
    private $status;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\StatusType $status, ?string $reason = null)
    {
        $this->status = $status;
        $this->reason = $reason;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\StatusType $status, ?string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatus(): \Flexnet\EntitlementOrderService\Type\StatusType
    {
        return $this->status;
    }

    public function withStatus(\Flexnet\EntitlementOrderService\Type\StatusType $status): \Flexnet\EntitlementOrderService\Type\StatusInfoType
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

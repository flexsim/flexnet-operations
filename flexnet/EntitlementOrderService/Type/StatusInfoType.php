<?php

namespace Flexnet\EntitlementOrderService\Type;

class StatusInfoType
{
    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @param  string  $status
     * @param  string  $reason
     */
    public function __construct(string $status, string $reason)
    {
        $this->status = $status;
        $this->reason = $reason;
    }

    /**
     * @param  string  $status
     * @param  string  $reason
     */
    public static function create(string $status, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function withStatus(string $status): StatusInfoType
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): StatusInfoType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}

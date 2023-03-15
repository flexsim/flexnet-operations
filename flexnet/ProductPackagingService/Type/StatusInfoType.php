<?php

namespace Flexnet\ProductPackagingService\Type;

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
     *
     * @param  string|null  $reason
     */
    public function __construct(string $status, string|null $reason = null)
    {
        $this->status = $status;
        $this->reason = $reason;
    }

    /**
     * @param  string|null  $reason
     */
    public static function create(string $status, string|null $reason = null)
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

    public function getReason(): string|null
    {
        return $this->reason;
    }

    public function withReason(string|null $reason): StatusInfoType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}

<?php

namespace Flexnet\ProductPackagingService\Type;

class StatusInfoType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\StatusType
     */
    private $status;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\StatusType $status, ?string $reason = null)
    {
        $this->status = $status;
        $this->reason = $reason;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\StatusType $status, ?string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatus(): \Flexnet\ProductPackagingService\Type\StatusType
    {
        return $this->status;
    }

    public function withStatus(\Flexnet\ProductPackagingService\Type\StatusType $status): \Flexnet\ProductPackagingService\Type\StatusInfoType
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): \Flexnet\ProductPackagingService\Type\StatusInfoType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}

<?php

namespace Flexnet\LicenseService\Type;

class StatusInfoType
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusType
     */
    private $status;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\LicenseService\Type\StatusType $status, ?string $reason = null)
    {
        $this->status = $status;
        $this->reason = $reason;
    }

    public static function create(\Flexnet\LicenseService\Type\StatusType $status, ?string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatus(): \Flexnet\LicenseService\Type\StatusType
    {
        return $this->status;
    }

    public function withStatus(\Flexnet\LicenseService\Type\StatusType $status): \Flexnet\LicenseService\Type\StatusInfoType
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): \Flexnet\LicenseService\Type\StatusInfoType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}

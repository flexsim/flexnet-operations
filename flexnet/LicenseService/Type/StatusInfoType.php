<?php

namespace Flexnet\LicenseService\Type;

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
     * @param string $status
     * @param string|null $reason
     */
    public function __construct(string $status, string|null $reason = null)
    {
        $this->status = $status;
        $this->reason = $reason;
    }

    /**
     * @param string $status
     * @param string|null $reason
     */
    public static function create(string $status, string|null $reason = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return StatusInfoType
     */
    public function withStatus(string $status) : \Flexnet\LicenseService\Type\StatusInfoType
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getReason() : string|null
    {
        return $this->reason;
    }

    /**
     * @param string|null $reason
     * @return StatusInfoType
     */
    public function withReason(string|null $reason) : \Flexnet\LicenseService\Type\StatusInfoType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}


<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedIdDataType
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(string $id, string $reason)
    {
        $this->id = $id;
        $this->reason = $reason;
    }

    public static function create(string $id, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function withId(string $id): FailedIdDataType
    {
        $new = clone $this;
        $new->id = $id;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): FailedIdDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}

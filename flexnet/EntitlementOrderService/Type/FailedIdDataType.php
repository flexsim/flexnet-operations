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
     *
     * @param  string  $id
     * @param  string  $reason
     */
    public function __construct(string $id, string $reason)
    {
        $this->id = $id;
        $this->reason = $reason;
    }

    /**
     * @param  string  $id
     * @param  string  $reason
     */
    public static function create(string $id, string $reason)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param  string  $id
     * @return FailedIdDataType
     */
    public function withId(string $id): FailedIdDataType
    {
        $new = clone $this;
        $new->id = $id;

        return $new;
    }

    /**
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }

    /**
     * @param  string  $reason
     * @return FailedIdDataType
     */
    public function withReason(string $reason): FailedIdDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}

<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedDeletePartNumberDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\PartNumberIdentifierType
     */
    private $partNumber;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(PartNumberIdentifierType $partNumber, string $reason)
    {
        $this->partNumber = $partNumber;
        $this->reason = $reason;
    }

    public static function create(PartNumberIdentifierType $partNumber, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getPartNumber(): PartNumberIdentifierType
    {
        return $this->partNumber;
    }

    public function withPartNumber(PartNumberIdentifierType $partNumber): FailedDeletePartNumberDataType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): FailedDeletePartNumberDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}

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
    public function __construct(\Flexnet\ProductPackagingService\Type\PartNumberIdentifierType $partNumber, string $reason)
    {
        $this->partNumber = $partNumber;
        $this->reason = $reason;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\PartNumberIdentifierType $partNumber, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getPartNumber(): \Flexnet\ProductPackagingService\Type\PartNumberIdentifierType
    {
        return $this->partNumber;
    }

    public function withPartNumber(\Flexnet\ProductPackagingService\Type\PartNumberIdentifierType $partNumber): \Flexnet\ProductPackagingService\Type\FailedDeletePartNumberDataType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): \Flexnet\ProductPackagingService\Type\FailedDeletePartNumberDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}

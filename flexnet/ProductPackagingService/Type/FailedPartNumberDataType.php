<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedPartNumberDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\CreatePartNumberDataType|null
     */
    private $partNumber;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(CreatePartNumberDataType $partNumber = null, string $reason = null)
    {
        $this->partNumber = $partNumber;
        $this->reason = $reason;
    }

    public static function create(CreatePartNumberDataType $partNumber = null, string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getPartNumber(): ?CreatePartNumberDataType
    {
        return $this->partNumber;
    }

    public function withPartNumber(?CreatePartNumberDataType $partNumber): FailedPartNumberDataType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): FailedPartNumberDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}

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
     *
     * @param  \Flexnet\ProductPackagingService\Type\CreatePartNumberDataType|null  $partNumber
     * @param  string|null  $reason
     */
    public function __construct(CreatePartNumberDataType|null $partNumber = null, string|null $reason = null)
    {
        $this->partNumber = $partNumber;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreatePartNumberDataType|null  $partNumber
     * @param  string|null  $reason
     */
    public static function create(CreatePartNumberDataType|null $partNumber = null, string|null $reason = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\CreatePartNumberDataType|null
     */
    public function getPartNumber(): CreatePartNumberDataType|null
    {
        return $this->partNumber;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreatePartNumberDataType|null  $partNumber
     */
    public function withPartNumber(CreatePartNumberDataType|null $partNumber): FailedPartNumberDataType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getReason(): string|null
    {
        return $this->reason;
    }

    public function withReason(string|null $reason): FailedPartNumberDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}

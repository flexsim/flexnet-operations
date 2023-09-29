<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedPartNumberDataListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedPartNumberDataType|array<\Flexnet\ProductPackagingService\Type\FailedPartNumberDataType>|null
     */
    private $failedPartNumber;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FailedPartNumberDataType|array<\Flexnet\ProductPackagingService\Type\FailedPartNumberDataType>|null  $failedPartNumber
     */
    public function __construct(FailedPartNumberDataType|array $failedPartNumber = null)
    {
        $this->failedPartNumber = $failedPartNumber;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedPartNumberDataType|array<\Flexnet\ProductPackagingService\Type\FailedPartNumberDataType>|null  $failedPartNumber
     */
    public static function create(FailedPartNumberDataType|array $failedPartNumber = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedPartNumberDataType|array<\Flexnet\ProductPackagingService\Type\FailedPartNumberDataType>|null
     */
    public function getFailedPartNumber(): FailedPartNumberDataType|array|null
    {
        return $this->failedPartNumber;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedPartNumberDataType|array<\Flexnet\ProductPackagingService\Type\FailedPartNumberDataType>|null  $failedPartNumber
     */
    public function withFailedPartNumber(FailedPartNumberDataType|array|null $failedPartNumber): FailedPartNumberDataListType
    {
        $new = clone $this;
        $new->failedPartNumber = $failedPartNumber;

        return $new;
    }
}

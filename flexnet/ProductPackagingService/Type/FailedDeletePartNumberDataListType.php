<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedDeletePartNumberDataListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedDeletePartNumberDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeletePartNumberDataType>|null
     */
    private $failedPartNumber;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FailedDeletePartNumberDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeletePartNumberDataType>|null  $failedPartNumber
     */
    public function __construct(FailedDeletePartNumberDataType|array|null $failedPartNumber = null)
    {
        $this->failedPartNumber = $failedPartNumber;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedDeletePartNumberDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeletePartNumberDataType>|null  $failedPartNumber
     */
    public static function create(FailedDeletePartNumberDataType|array|null $failedPartNumber = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedDeletePartNumberDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeletePartNumberDataType>|null
     */
    public function getFailedPartNumber(): FailedDeletePartNumberDataType|array|null
    {
        return $this->failedPartNumber;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedDeletePartNumberDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeletePartNumberDataType>|null  $failedPartNumber
     */
    public function withFailedPartNumber(FailedDeletePartNumberDataType|array|null $failedPartNumber): FailedDeletePartNumberDataListType
    {
        $new = clone $this;
        $new->failedPartNumber = $failedPartNumber;

        return $new;
    }
}

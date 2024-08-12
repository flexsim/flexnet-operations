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
    public function __construct(\Flexnet\ProductPackagingService\Type\FailedPartNumberDataType|array|null $failedPartNumber = null)
    {
        $this->failedPartNumber = $failedPartNumber;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedPartNumberDataType|array<\Flexnet\ProductPackagingService\Type\FailedPartNumberDataType>|null  $failedPartNumber
     */
    public static function create(\Flexnet\ProductPackagingService\Type\FailedPartNumberDataType|array|null $failedPartNumber = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedPartNumberDataType|array<\Flexnet\ProductPackagingService\Type\FailedPartNumberDataType>|null
     */
    public function getFailedPartNumber(): \Flexnet\ProductPackagingService\Type\FailedPartNumberDataType|array|null
    {
        return $this->failedPartNumber;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedPartNumberDataType|array<\Flexnet\ProductPackagingService\Type\FailedPartNumberDataType>|null  $failedPartNumber
     */
    public function withFailedPartNumber(\Flexnet\ProductPackagingService\Type\FailedPartNumberDataType|array|null $failedPartNumber): \Flexnet\ProductPackagingService\Type\FailedPartNumberDataListType
    {
        $new = clone $this;
        $new->failedPartNumber = $failedPartNumber;

        return $new;
    }
}

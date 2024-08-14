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
    public function __construct(\Flexnet\ProductPackagingService\Type\FailedDeletePartNumberDataType|array|null $failedPartNumber = null)
    {
        $this->failedPartNumber = $failedPartNumber;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedDeletePartNumberDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeletePartNumberDataType>|null  $failedPartNumber
     */
    public static function create(\Flexnet\ProductPackagingService\Type\FailedDeletePartNumberDataType|array|null $failedPartNumber = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedDeletePartNumberDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeletePartNumberDataType>|null
     */
    public function getFailedPartNumber(): \Flexnet\ProductPackagingService\Type\FailedDeletePartNumberDataType|array|null
    {
        return $this->failedPartNumber;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedDeletePartNumberDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeletePartNumberDataType>|null  $failedPartNumber
     */
    public function withFailedPartNumber(\Flexnet\ProductPackagingService\Type\FailedDeletePartNumberDataType|array|null $failedPartNumber): \Flexnet\ProductPackagingService\Type\FailedDeletePartNumberDataListType
    {
        $new = clone $this;
        $new->failedPartNumber = $failedPartNumber;

        return $new;
    }
}

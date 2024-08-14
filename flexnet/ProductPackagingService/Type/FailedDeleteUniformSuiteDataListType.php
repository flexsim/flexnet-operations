<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedDeleteUniformSuiteDataListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedDeleteUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeleteUniformSuiteDataType>|null
     */
    private $failedUniformSuite;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FailedDeleteUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeleteUniformSuiteDataType>|null  $failedUniformSuite
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\FailedDeleteUniformSuiteDataType|array|null $failedUniformSuite = null)
    {
        $this->failedUniformSuite = $failedUniformSuite;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedDeleteUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeleteUniformSuiteDataType>|null  $failedUniformSuite
     */
    public static function create(\Flexnet\ProductPackagingService\Type\FailedDeleteUniformSuiteDataType|array|null $failedUniformSuite = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedDeleteUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeleteUniformSuiteDataType>|null
     */
    public function getFailedUniformSuite(): \Flexnet\ProductPackagingService\Type\FailedDeleteUniformSuiteDataType|array|null
    {
        return $this->failedUniformSuite;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedDeleteUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeleteUniformSuiteDataType>|null  $failedUniformSuite
     */
    public function withFailedUniformSuite(\Flexnet\ProductPackagingService\Type\FailedDeleteUniformSuiteDataType|array|null $failedUniformSuite): \Flexnet\ProductPackagingService\Type\FailedDeleteUniformSuiteDataListType
    {
        $new = clone $this;
        $new->failedUniformSuite = $failedUniformSuite;

        return $new;
    }
}

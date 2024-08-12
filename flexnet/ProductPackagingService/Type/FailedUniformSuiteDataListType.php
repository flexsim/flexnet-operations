<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedUniformSuiteDataListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\FailedUniformSuiteDataType>|null
     */
    private $failedUniformSuite;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FailedUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\FailedUniformSuiteDataType>|null  $failedUniformSuite
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\FailedUniformSuiteDataType|array|null $failedUniformSuite = null)
    {
        $this->failedUniformSuite = $failedUniformSuite;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\FailedUniformSuiteDataType>|null  $failedUniformSuite
     */
    public static function create(\Flexnet\ProductPackagingService\Type\FailedUniformSuiteDataType|array|null $failedUniformSuite = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\FailedUniformSuiteDataType>|null
     */
    public function getFailedUniformSuite(): \Flexnet\ProductPackagingService\Type\FailedUniformSuiteDataType|array|null
    {
        return $this->failedUniformSuite;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\FailedUniformSuiteDataType>|null  $failedUniformSuite
     */
    public function withFailedUniformSuite(\Flexnet\ProductPackagingService\Type\FailedUniformSuiteDataType|array|null $failedUniformSuite): \Flexnet\ProductPackagingService\Type\FailedUniformSuiteDataListType
    {
        $new = clone $this;
        $new->failedUniformSuite = $failedUniformSuite;

        return $new;
    }
}

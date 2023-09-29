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
    public function __construct(FailedDeleteUniformSuiteDataType|array $failedUniformSuite = null)
    {
        $this->failedUniformSuite = $failedUniformSuite;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedDeleteUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeleteUniformSuiteDataType>|null  $failedUniformSuite
     */
    public static function create(FailedDeleteUniformSuiteDataType|array $failedUniformSuite = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedDeleteUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeleteUniformSuiteDataType>|null
     */
    public function getFailedUniformSuite(): FailedDeleteUniformSuiteDataType|array|null
    {
        return $this->failedUniformSuite;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedDeleteUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeleteUniformSuiteDataType>|null  $failedUniformSuite
     */
    public function withFailedUniformSuite(FailedDeleteUniformSuiteDataType|array|null $failedUniformSuite): FailedDeleteUniformSuiteDataListType
    {
        $new = clone $this;
        $new->failedUniformSuite = $failedUniformSuite;

        return $new;
    }
}

<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedUpdateUniformSuiteDataListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedUpdateUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateUniformSuiteDataType>|null
     */
    private $failedUniformSuite;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FailedUpdateUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateUniformSuiteDataType>|null  $failedUniformSuite
     */
    public function __construct(FailedUpdateUniformSuiteDataType|array|null $failedUniformSuite = null)
    {
        $this->failedUniformSuite = $failedUniformSuite;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedUpdateUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateUniformSuiteDataType>|null  $failedUniformSuite
     */
    public static function create(FailedUpdateUniformSuiteDataType|array|null $failedUniformSuite = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedUpdateUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateUniformSuiteDataType>|null
     */
    public function getFailedUniformSuite(): FailedUpdateUniformSuiteDataType|array|null
    {
        return $this->failedUniformSuite;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedUpdateUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateUniformSuiteDataType>|null  $failedUniformSuite
     */
    public function withFailedUniformSuite(FailedUpdateUniformSuiteDataType|array|null $failedUniformSuite): FailedUpdateUniformSuiteDataListType
    {
        $new = clone $this;
        $new->failedUniformSuite = $failedUniformSuite;

        return $new;
    }
}

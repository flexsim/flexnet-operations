<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedUniformSuiteStateDataListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedUniformSuiteStateDataType|array<\Flexnet\ProductPackagingService\Type\FailedUniformSuiteStateDataType>|null
     */
    private $failedUniformSuite;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FailedUniformSuiteStateDataType|array<\Flexnet\ProductPackagingService\Type\FailedUniformSuiteStateDataType>|null  $failedUniformSuite
     */
    public function __construct(FailedUniformSuiteStateDataType|array|null $failedUniformSuite = null)
    {
        $this->failedUniformSuite = $failedUniformSuite;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedUniformSuiteStateDataType|array<\Flexnet\ProductPackagingService\Type\FailedUniformSuiteStateDataType>|null  $failedUniformSuite
     */
    public static function create(FailedUniformSuiteStateDataType|array|null $failedUniformSuite = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedUniformSuiteStateDataType|array<\Flexnet\ProductPackagingService\Type\FailedUniformSuiteStateDataType>|null
     */
    public function getFailedUniformSuite(): FailedUniformSuiteStateDataType|array|null
    {
        return $this->failedUniformSuite;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedUniformSuiteStateDataType|array<\Flexnet\ProductPackagingService\Type\FailedUniformSuiteStateDataType>|null  $failedUniformSuite
     */
    public function withFailedUniformSuite(FailedUniformSuiteStateDataType|array|null $failedUniformSuite): FailedUniformSuiteStateDataListType
    {
        $new = clone $this;
        $new->failedUniformSuite = $failedUniformSuite;

        return $new;
    }
}

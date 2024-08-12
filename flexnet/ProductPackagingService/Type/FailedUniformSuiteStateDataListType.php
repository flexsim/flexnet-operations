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
    public function __construct(\Flexnet\ProductPackagingService\Type\FailedUniformSuiteStateDataType|array|null $failedUniformSuite = null)
    {
        $this->failedUniformSuite = $failedUniformSuite;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedUniformSuiteStateDataType|array<\Flexnet\ProductPackagingService\Type\FailedUniformSuiteStateDataType>|null  $failedUniformSuite
     */
    public static function create(\Flexnet\ProductPackagingService\Type\FailedUniformSuiteStateDataType|array|null $failedUniformSuite = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedUniformSuiteStateDataType|array<\Flexnet\ProductPackagingService\Type\FailedUniformSuiteStateDataType>|null
     */
    public function getFailedUniformSuite(): \Flexnet\ProductPackagingService\Type\FailedUniformSuiteStateDataType|array|null
    {
        return $this->failedUniformSuite;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedUniformSuiteStateDataType|array<\Flexnet\ProductPackagingService\Type\FailedUniformSuiteStateDataType>|null  $failedUniformSuite
     */
    public function withFailedUniformSuite(\Flexnet\ProductPackagingService\Type\FailedUniformSuiteStateDataType|array|null $failedUniformSuite): \Flexnet\ProductPackagingService\Type\FailedUniformSuiteStateDataListType
    {
        $new = clone $this;
        $new->failedUniformSuite = $failedUniformSuite;

        return $new;
    }
}

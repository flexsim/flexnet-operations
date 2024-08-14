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
    public function __construct(\Flexnet\ProductPackagingService\Type\FailedUpdateUniformSuiteDataType|array|null $failedUniformSuite = null)
    {
        $this->failedUniformSuite = $failedUniformSuite;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedUpdateUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateUniformSuiteDataType>|null  $failedUniformSuite
     */
    public static function create(\Flexnet\ProductPackagingService\Type\FailedUpdateUniformSuiteDataType|array|null $failedUniformSuite = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedUpdateUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateUniformSuiteDataType>|null
     */
    public function getFailedUniformSuite(): \Flexnet\ProductPackagingService\Type\FailedUpdateUniformSuiteDataType|array|null
    {
        return $this->failedUniformSuite;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedUpdateUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateUniformSuiteDataType>|null  $failedUniformSuite
     */
    public function withFailedUniformSuite(\Flexnet\ProductPackagingService\Type\FailedUpdateUniformSuiteDataType|array|null $failedUniformSuite): \Flexnet\ProductPackagingService\Type\FailedUpdateUniformSuiteDataListType
    {
        $new = clone $this;
        $new->failedUniformSuite = $failedUniformSuite;

        return $new;
    }
}

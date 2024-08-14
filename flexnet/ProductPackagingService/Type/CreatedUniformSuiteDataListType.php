<?php

namespace Flexnet\ProductPackagingService\Type;

class CreatedUniformSuiteDataListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\CreatedUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\CreatedUniformSuiteDataType>|null
     */
    private $createdUniformSuite;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\CreatedUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\CreatedUniformSuiteDataType>|null  $createdUniformSuite
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\CreatedUniformSuiteDataType|array|null $createdUniformSuite = null)
    {
        $this->createdUniformSuite = $createdUniformSuite;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreatedUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\CreatedUniformSuiteDataType>|null  $createdUniformSuite
     */
    public static function create(\Flexnet\ProductPackagingService\Type\CreatedUniformSuiteDataType|array|null $createdUniformSuite = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\CreatedUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\CreatedUniformSuiteDataType>|null
     */
    public function getCreatedUniformSuite(): \Flexnet\ProductPackagingService\Type\CreatedUniformSuiteDataType|array|null
    {
        return $this->createdUniformSuite;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreatedUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\CreatedUniformSuiteDataType>|null  $createdUniformSuite
     */
    public function withCreatedUniformSuite(\Flexnet\ProductPackagingService\Type\CreatedUniformSuiteDataType|array|null $createdUniformSuite): \Flexnet\ProductPackagingService\Type\CreatedUniformSuiteDataListType
    {
        $new = clone $this;
        $new->createdUniformSuite = $createdUniformSuite;

        return $new;
    }
}

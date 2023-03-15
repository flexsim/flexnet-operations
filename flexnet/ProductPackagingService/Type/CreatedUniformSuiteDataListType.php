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
    public function __construct(CreatedUniformSuiteDataType|array|null $createdUniformSuite = null)
    {
        $this->createdUniformSuite = $createdUniformSuite;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreatedUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\CreatedUniformSuiteDataType>|null  $createdUniformSuite
     */
    public static function create(CreatedUniformSuiteDataType|array|null $createdUniformSuite = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\CreatedUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\CreatedUniformSuiteDataType>|null
     */
    public function getCreatedUniformSuite(): CreatedUniformSuiteDataType|array|null
    {
        return $this->createdUniformSuite;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreatedUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\CreatedUniformSuiteDataType>|null  $createdUniformSuite
     */
    public function withCreatedUniformSuite(CreatedUniformSuiteDataType|array|null $createdUniformSuite): CreatedUniformSuiteDataListType
    {
        $new = clone $this;
        $new->createdUniformSuite = $createdUniformSuite;

        return $new;
    }
}

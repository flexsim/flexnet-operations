<?php

namespace Flexnet\ProductPackagingService\Type;

class GetUniformSuitesQueryResponseDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\UniformSuiteQueryDataType|array<\Flexnet\ProductPackagingService\Type\UniformSuiteQueryDataType>|null
     */
    private $uniformSuite;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\UniformSuiteQueryDataType|array<\Flexnet\ProductPackagingService\Type\UniformSuiteQueryDataType>|null  $uniformSuite
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\UniformSuiteQueryDataType|array|null $uniformSuite = null)
    {
        $this->uniformSuite = $uniformSuite;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UniformSuiteQueryDataType|array<\Flexnet\ProductPackagingService\Type\UniformSuiteQueryDataType>|null  $uniformSuite
     */
    public static function create(\Flexnet\ProductPackagingService\Type\UniformSuiteQueryDataType|array|null $uniformSuite = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\UniformSuiteQueryDataType|array<\Flexnet\ProductPackagingService\Type\UniformSuiteQueryDataType>|null
     */
    public function getUniformSuite(): \Flexnet\ProductPackagingService\Type\UniformSuiteQueryDataType|array|null
    {
        return $this->uniformSuite;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UniformSuiteQueryDataType|array<\Flexnet\ProductPackagingService\Type\UniformSuiteQueryDataType>|null  $uniformSuite
     */
    public function withUniformSuite(\Flexnet\ProductPackagingService\Type\UniformSuiteQueryDataType|array|null $uniformSuite): \Flexnet\ProductPackagingService\Type\GetUniformSuitesQueryResponseDataType
    {
        $new = clone $this;
        $new->uniformSuite = $uniformSuite;

        return $new;
    }
}

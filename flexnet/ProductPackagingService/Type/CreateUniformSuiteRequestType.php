<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateUniformSuiteRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\CreateUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\CreateUniformSuiteDataType>
     */
    private $uniformSuite;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\CreateUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\CreateUniformSuiteDataType>  $uniformSuite
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\CreateUniformSuiteDataType|array $uniformSuite)
    {
        $this->uniformSuite = $uniformSuite;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreateUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\CreateUniformSuiteDataType>  $uniformSuite
     */
    public static function create(\Flexnet\ProductPackagingService\Type\CreateUniformSuiteDataType|array $uniformSuite)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\CreateUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\CreateUniformSuiteDataType>
     */
    public function getUniformSuite(): \Flexnet\ProductPackagingService\Type\CreateUniformSuiteDataType|array
    {
        return $this->uniformSuite;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreateUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\CreateUniformSuiteDataType>  $uniformSuite
     */
    public function withUniformSuite(\Flexnet\ProductPackagingService\Type\CreateUniformSuiteDataType|array $uniformSuite): \Flexnet\ProductPackagingService\Type\CreateUniformSuiteRequestType
    {
        $new = clone $this;
        $new->uniformSuite = $uniformSuite;

        return $new;
    }
}

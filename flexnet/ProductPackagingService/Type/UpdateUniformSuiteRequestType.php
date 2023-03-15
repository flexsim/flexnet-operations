<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateUniformSuiteRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\UpdateUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\UpdateUniformSuiteDataType>
     */
    private $uniformSuite;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\UpdateUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\UpdateUniformSuiteDataType>  $uniformSuite
     */
    public function __construct(UpdateUniformSuiteDataType|array $uniformSuite)
    {
        $this->uniformSuite = $uniformSuite;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UpdateUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\UpdateUniformSuiteDataType>  $uniformSuite
     */
    public static function create(UpdateUniformSuiteDataType|array $uniformSuite)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\UpdateUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\UpdateUniformSuiteDataType>
     */
    public function getUniformSuite(): UpdateUniformSuiteDataType|array
    {
        return $this->uniformSuite;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UpdateUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\UpdateUniformSuiteDataType>  $uniformSuite
     */
    public function withUniformSuite(UpdateUniformSuiteDataType|array $uniformSuite): UpdateUniformSuiteRequestType
    {
        $new = clone $this;
        $new->uniformSuite = $uniformSuite;

        return $new;
    }
}

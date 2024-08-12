<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteUniformSuiteRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\DeleteUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\DeleteUniformSuiteDataType>
     */
    private $uniformSuite;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\DeleteUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\DeleteUniformSuiteDataType>  $uniformSuite
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\DeleteUniformSuiteDataType|array $uniformSuite)
    {
        $this->uniformSuite = $uniformSuite;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\DeleteUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\DeleteUniformSuiteDataType>  $uniformSuite
     */
    public static function create(\Flexnet\ProductPackagingService\Type\DeleteUniformSuiteDataType|array $uniformSuite)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\DeleteUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\DeleteUniformSuiteDataType>
     */
    public function getUniformSuite(): \Flexnet\ProductPackagingService\Type\DeleteUniformSuiteDataType|array
    {
        return $this->uniformSuite;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\DeleteUniformSuiteDataType|array<\Flexnet\ProductPackagingService\Type\DeleteUniformSuiteDataType>  $uniformSuite
     */
    public function withUniformSuite(\Flexnet\ProductPackagingService\Type\DeleteUniformSuiteDataType|array $uniformSuite): \Flexnet\ProductPackagingService\Type\DeleteUniformSuiteRequestType
    {
        $new = clone $this;
        $new->uniformSuite = $uniformSuite;

        return $new;
    }
}

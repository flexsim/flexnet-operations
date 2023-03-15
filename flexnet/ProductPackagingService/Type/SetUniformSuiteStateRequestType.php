<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetUniformSuiteStateRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\UniformSuiteStateDataType|array<\Flexnet\ProductPackagingService\Type\UniformSuiteStateDataType>
     */
    private $suite;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\UniformSuiteStateDataType|array<\Flexnet\ProductPackagingService\Type\UniformSuiteStateDataType>  $suite
     */
    public function __construct(UniformSuiteStateDataType|array $suite)
    {
        $this->suite = $suite;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UniformSuiteStateDataType|array<\Flexnet\ProductPackagingService\Type\UniformSuiteStateDataType>  $suite
     */
    public static function create(UniformSuiteStateDataType|array $suite)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\UniformSuiteStateDataType|array<\Flexnet\ProductPackagingService\Type\UniformSuiteStateDataType>
     */
    public function getSuite(): UniformSuiteStateDataType|array
    {
        return $this->suite;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UniformSuiteStateDataType|array<\Flexnet\ProductPackagingService\Type\UniformSuiteStateDataType>  $suite
     */
    public function withSuite(UniformSuiteStateDataType|array $suite): SetUniformSuiteStateRequestType
    {
        $new = clone $this;
        $new->suite = $suite;

        return $new;
    }
}

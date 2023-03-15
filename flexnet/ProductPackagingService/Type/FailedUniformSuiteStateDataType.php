<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedUniformSuiteStateDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\UniformSuiteStateDataType
     */
    private $suite;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\UniformSuiteStateDataType  $suite
     */
    public function __construct(UniformSuiteStateDataType $suite, string $reason)
    {
        $this->suite = $suite;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UniformSuiteStateDataType  $suite
     */
    public static function create(UniformSuiteStateDataType $suite, string $reason)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\UniformSuiteStateDataType
     */
    public function getSuite(): UniformSuiteStateDataType
    {
        return $this->suite;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UniformSuiteStateDataType  $suite
     */
    public function withSuite(UniformSuiteStateDataType $suite): FailedUniformSuiteStateDataType
    {
        $new = clone $this;
        $new->suite = $suite;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): FailedUniformSuiteStateDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}

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
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\UniformSuiteStateDataType $suite, string $reason)
    {
        $this->suite = $suite;
        $this->reason = $reason;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\UniformSuiteStateDataType $suite, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getSuite(): \Flexnet\ProductPackagingService\Type\UniformSuiteStateDataType
    {
        return $this->suite;
    }

    public function withSuite(\Flexnet\ProductPackagingService\Type\UniformSuiteStateDataType $suite): \Flexnet\ProductPackagingService\Type\FailedUniformSuiteStateDataType
    {
        $new = clone $this;
        $new->suite = $suite;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): \Flexnet\ProductPackagingService\Type\FailedUniformSuiteStateDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}

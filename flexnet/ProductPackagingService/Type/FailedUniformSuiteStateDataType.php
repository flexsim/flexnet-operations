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
    public function __construct(UniformSuiteStateDataType $suite, string $reason)
    {
        $this->suite = $suite;
        $this->reason = $reason;
    }

    public static function create(UniformSuiteStateDataType $suite, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getSuite(): UniformSuiteStateDataType
    {
        return $this->suite;
    }

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

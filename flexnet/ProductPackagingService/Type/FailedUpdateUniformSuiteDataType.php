<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedUpdateUniformSuiteDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\UpdateUniformSuiteDataType
     */
    private $uniformSuite;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\UpdateUniformSuiteDataType  $uniformSuite
     * @param  string|null  $reason
     */
    public function __construct(UpdateUniformSuiteDataType $uniformSuite, string|null $reason = null)
    {
        $this->uniformSuite = $uniformSuite;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UpdateUniformSuiteDataType  $uniformSuite
     * @param  string|null  $reason
     */
    public static function create(UpdateUniformSuiteDataType $uniformSuite, string|null $reason = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\UpdateUniformSuiteDataType
     */
    public function getUniformSuite(): UpdateUniformSuiteDataType
    {
        return $this->uniformSuite;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UpdateUniformSuiteDataType  $uniformSuite
     */
    public function withUniformSuite(UpdateUniformSuiteDataType $uniformSuite): FailedUpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->uniformSuite = $uniformSuite;

        return $new;
    }

    public function getReason(): string|null
    {
        return $this->reason;
    }

    public function withReason(string|null $reason): FailedUpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}

<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedUniformSuiteDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\CreateUniformSuiteDataType|null
     */
    private $uniformSuite;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\CreateUniformSuiteDataType|null  $uniformSuite
     * @param  string|null  $reason
     */
    public function __construct(CreateUniformSuiteDataType|null $uniformSuite = null, string|null $reason = null)
    {
        $this->uniformSuite = $uniformSuite;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreateUniformSuiteDataType|null  $uniformSuite
     * @param  string|null  $reason
     */
    public static function create(CreateUniformSuiteDataType|null $uniformSuite = null, string|null $reason = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\CreateUniformSuiteDataType|null
     */
    public function getUniformSuite(): CreateUniformSuiteDataType|null
    {
        return $this->uniformSuite;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreateUniformSuiteDataType|null  $uniformSuite
     */
    public function withUniformSuite(CreateUniformSuiteDataType|null $uniformSuite): FailedUniformSuiteDataType
    {
        $new = clone $this;
        $new->uniformSuite = $uniformSuite;

        return $new;
    }

    public function getReason(): string|null
    {
        return $this->reason;
    }

    public function withReason(string|null $reason): FailedUniformSuiteDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}

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
     */
    public function __construct(UpdateUniformSuiteDataType $uniformSuite, string $reason = null)
    {
        $this->uniformSuite = $uniformSuite;
        $this->reason = $reason;
    }

    public static function create(UpdateUniformSuiteDataType $uniformSuite, string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniformSuite(): UpdateUniformSuiteDataType
    {
        return $this->uniformSuite;
    }

    public function withUniformSuite(UpdateUniformSuiteDataType $uniformSuite): FailedUpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->uniformSuite = $uniformSuite;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): FailedUpdateUniformSuiteDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}

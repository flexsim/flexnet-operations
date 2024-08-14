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
     */
    public function __construct(?\Flexnet\ProductPackagingService\Type\CreateUniformSuiteDataType $uniformSuite = null, ?string $reason = null)
    {
        $this->uniformSuite = $uniformSuite;
        $this->reason = $reason;
    }

    public static function create(?\Flexnet\ProductPackagingService\Type\CreateUniformSuiteDataType $uniformSuite = null, ?string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniformSuite(): ?\Flexnet\ProductPackagingService\Type\CreateUniformSuiteDataType
    {
        return $this->uniformSuite;
    }

    public function withUniformSuite(?\Flexnet\ProductPackagingService\Type\CreateUniformSuiteDataType $uniformSuite): \Flexnet\ProductPackagingService\Type\FailedUniformSuiteDataType
    {
        $new = clone $this;
        $new->uniformSuite = $uniformSuite;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): \Flexnet\ProductPackagingService\Type\FailedUniformSuiteDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}

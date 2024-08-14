<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedDeleteUniformSuiteDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\SuiteIdentifierType
     */
    private $suiteIdentifier;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\SuiteIdentifierType $suiteIdentifier, ?string $reason = null)
    {
        $this->suiteIdentifier = $suiteIdentifier;
        $this->reason = $reason;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\SuiteIdentifierType $suiteIdentifier, ?string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getSuiteIdentifier(): \Flexnet\ProductPackagingService\Type\SuiteIdentifierType
    {
        return $this->suiteIdentifier;
    }

    public function withSuiteIdentifier(\Flexnet\ProductPackagingService\Type\SuiteIdentifierType $suiteIdentifier): \Flexnet\ProductPackagingService\Type\FailedDeleteUniformSuiteDataType
    {
        $new = clone $this;
        $new->suiteIdentifier = $suiteIdentifier;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): \Flexnet\ProductPackagingService\Type\FailedDeleteUniformSuiteDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}

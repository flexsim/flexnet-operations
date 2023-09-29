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
    public function __construct(SuiteIdentifierType $suiteIdentifier, string $reason = null)
    {
        $this->suiteIdentifier = $suiteIdentifier;
        $this->reason = $reason;
    }

    public static function create(SuiteIdentifierType $suiteIdentifier, string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getSuiteIdentifier(): SuiteIdentifierType
    {
        return $this->suiteIdentifier;
    }

    public function withSuiteIdentifier(SuiteIdentifierType $suiteIdentifier): FailedDeleteUniformSuiteDataType
    {
        $new = clone $this;
        $new->suiteIdentifier = $suiteIdentifier;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): FailedDeleteUniformSuiteDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}

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
     *
     * @param  \Flexnet\ProductPackagingService\Type\SuiteIdentifierType  $suiteIdentifier
     * @param  string|null  $reason
     */
    public function __construct(SuiteIdentifierType $suiteIdentifier, string|null $reason = null)
    {
        $this->suiteIdentifier = $suiteIdentifier;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\SuiteIdentifierType  $suiteIdentifier
     * @param  string|null  $reason
     */
    public static function create(SuiteIdentifierType $suiteIdentifier, string|null $reason = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\SuiteIdentifierType
     */
    public function getSuiteIdentifier(): SuiteIdentifierType
    {
        return $this->suiteIdentifier;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\SuiteIdentifierType  $suiteIdentifier
     */
    public function withSuiteIdentifier(SuiteIdentifierType $suiteIdentifier): FailedDeleteUniformSuiteDataType
    {
        $new = clone $this;
        $new->suiteIdentifier = $suiteIdentifier;

        return $new;
    }

    public function getReason(): string|null
    {
        return $this->reason;
    }

    public function withReason(string|null $reason): FailedDeleteUniformSuiteDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}

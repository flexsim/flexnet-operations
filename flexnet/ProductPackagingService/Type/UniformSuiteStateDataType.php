<?php

namespace Flexnet\ProductPackagingService\Type;

class UniformSuiteStateDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\SuiteIdentifierType
     */
    private $suiteIdentifier;

    /**
     * @var string
     */
    private $stateToSet;

    /**
     * Constructor
     */
    public function __construct(SuiteIdentifierType $suiteIdentifier, string $stateToSet)
    {
        $this->suiteIdentifier = $suiteIdentifier;
        $this->stateToSet = $stateToSet;
    }

    public static function create(SuiteIdentifierType $suiteIdentifier, string $stateToSet)
    {
        return new static(...\func_get_args());
    }

    public function getSuiteIdentifier(): SuiteIdentifierType
    {
        return $this->suiteIdentifier;
    }

    public function withSuiteIdentifier(SuiteIdentifierType $suiteIdentifier): UniformSuiteStateDataType
    {
        $new = clone $this;
        $new->suiteIdentifier = $suiteIdentifier;

        return $new;
    }

    public function getStateToSet(): string
    {
        return $this->stateToSet;
    }

    public function withStateToSet(string $stateToSet): UniformSuiteStateDataType
    {
        $new = clone $this;
        $new->stateToSet = $stateToSet;

        return $new;
    }
}

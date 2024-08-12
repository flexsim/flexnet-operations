<?php

namespace Flexnet\ProductPackagingService\Type;

class UniformSuiteStateDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\SuiteIdentifierType
     */
    private $suiteIdentifier;

    /**
     * @var \Flexnet\ProductPackagingService\Type\StateType
     */
    private $stateToSet;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\SuiteIdentifierType $suiteIdentifier, \Flexnet\ProductPackagingService\Type\StateType $stateToSet)
    {
        $this->suiteIdentifier = $suiteIdentifier;
        $this->stateToSet = $stateToSet;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\SuiteIdentifierType $suiteIdentifier, \Flexnet\ProductPackagingService\Type\StateType $stateToSet)
    {
        return new static(...\func_get_args());
    }

    public function getSuiteIdentifier(): \Flexnet\ProductPackagingService\Type\SuiteIdentifierType
    {
        return $this->suiteIdentifier;
    }

    public function withSuiteIdentifier(\Flexnet\ProductPackagingService\Type\SuiteIdentifierType $suiteIdentifier): \Flexnet\ProductPackagingService\Type\UniformSuiteStateDataType
    {
        $new = clone $this;
        $new->suiteIdentifier = $suiteIdentifier;

        return $new;
    }

    public function getStateToSet(): \Flexnet\ProductPackagingService\Type\StateType
    {
        return $this->stateToSet;
    }

    public function withStateToSet(\Flexnet\ProductPackagingService\Type\StateType $stateToSet): \Flexnet\ProductPackagingService\Type\UniformSuiteStateDataType
    {
        $new = clone $this;
        $new->stateToSet = $stateToSet;

        return $new;
    }
}

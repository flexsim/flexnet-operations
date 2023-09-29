<?php

namespace Flexnet\ProductPackagingService\Type;

class DeleteUniformSuiteDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\SuiteIdentifierType
     */
    private $suiteIdentifier;

    /**
     * Constructor
     */
    public function __construct(SuiteIdentifierType $suiteIdentifier)
    {
        $this->suiteIdentifier = $suiteIdentifier;
    }

    public static function create(SuiteIdentifierType $suiteIdentifier)
    {
        return new static(...\func_get_args());
    }

    public function getSuiteIdentifier(): SuiteIdentifierType
    {
        return $this->suiteIdentifier;
    }

    public function withSuiteIdentifier(SuiteIdentifierType $suiteIdentifier): DeleteUniformSuiteDataType
    {
        $new = clone $this;
        $new->suiteIdentifier = $suiteIdentifier;

        return $new;
    }
}

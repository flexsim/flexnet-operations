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
     *
     * @param  \Flexnet\ProductPackagingService\Type\SuiteIdentifierType  $suiteIdentifier
     */
    public function __construct(SuiteIdentifierType $suiteIdentifier)
    {
        $this->suiteIdentifier = $suiteIdentifier;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\SuiteIdentifierType  $suiteIdentifier
     */
    public static function create(SuiteIdentifierType $suiteIdentifier)
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
    public function withSuiteIdentifier(SuiteIdentifierType $suiteIdentifier): DeleteUniformSuiteDataType
    {
        $new = clone $this;
        $new->suiteIdentifier = $suiteIdentifier;

        return $new;
    }
}

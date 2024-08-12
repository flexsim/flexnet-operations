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
    public function __construct(\Flexnet\ProductPackagingService\Type\SuiteIdentifierType $suiteIdentifier)
    {
        $this->suiteIdentifier = $suiteIdentifier;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\SuiteIdentifierType $suiteIdentifier)
    {
        return new static(...\func_get_args());
    }

    public function getSuiteIdentifier(): \Flexnet\ProductPackagingService\Type\SuiteIdentifierType
    {
        return $this->suiteIdentifier;
    }

    public function withSuiteIdentifier(\Flexnet\ProductPackagingService\Type\SuiteIdentifierType $suiteIdentifier): \Flexnet\ProductPackagingService\Type\DeleteUniformSuiteDataType
    {
        $new = clone $this;
        $new->suiteIdentifier = $suiteIdentifier;

        return $new;
    }
}

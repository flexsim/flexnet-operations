<?php

namespace Flexnet\ProductPackagingService\Type;

class DeletePartNumberDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\PartNumberIdentifierType
     */
    private $partNumberIdentifier;

    /**
     * Constructor
     */
    public function __construct(PartNumberIdentifierType $partNumberIdentifier)
    {
        $this->partNumberIdentifier = $partNumberIdentifier;
    }

    public static function create(PartNumberIdentifierType $partNumberIdentifier)
    {
        return new static(...\func_get_args());
    }

    public function getPartNumberIdentifier(): PartNumberIdentifierType
    {
        return $this->partNumberIdentifier;
    }

    public function withPartNumberIdentifier(PartNumberIdentifierType $partNumberIdentifier): DeletePartNumberDataType
    {
        $new = clone $this;
        $new->partNumberIdentifier = $partNumberIdentifier;

        return $new;
    }
}

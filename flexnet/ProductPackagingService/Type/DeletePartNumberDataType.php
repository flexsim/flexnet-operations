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
    public function __construct(\Flexnet\ProductPackagingService\Type\PartNumberIdentifierType $partNumberIdentifier)
    {
        $this->partNumberIdentifier = $partNumberIdentifier;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\PartNumberIdentifierType $partNumberIdentifier)
    {
        return new static(...\func_get_args());
    }

    public function getPartNumberIdentifier(): \Flexnet\ProductPackagingService\Type\PartNumberIdentifierType
    {
        return $this->partNumberIdentifier;
    }

    public function withPartNumberIdentifier(\Flexnet\ProductPackagingService\Type\PartNumberIdentifierType $partNumberIdentifier): \Flexnet\ProductPackagingService\Type\DeletePartNumberDataType
    {
        $new = clone $this;
        $new->partNumberIdentifier = $partNumberIdentifier;

        return $new;
    }
}

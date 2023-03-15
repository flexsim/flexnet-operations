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
     *
     * @param  \Flexnet\ProductPackagingService\Type\PartNumberIdentifierType  $partNumberIdentifier
     */
    public function __construct(PartNumberIdentifierType $partNumberIdentifier)
    {
        $this->partNumberIdentifier = $partNumberIdentifier;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\PartNumberIdentifierType  $partNumberIdentifier
     */
    public static function create(PartNumberIdentifierType $partNumberIdentifier)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\PartNumberIdentifierType
     */
    public function getPartNumberIdentifier(): PartNumberIdentifierType
    {
        return $this->partNumberIdentifier;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\PartNumberIdentifierType  $partNumberIdentifier
     */
    public function withPartNumberIdentifier(PartNumberIdentifierType $partNumberIdentifier): DeletePartNumberDataType
    {
        $new = clone $this;
        $new->partNumberIdentifier = $partNumberIdentifier;

        return $new;
    }
}

<?php

namespace Flexnet\ProductPackagingService\Type;

class PartNumbersSimpleListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\PartNumberIdentifierType|array<\Flexnet\ProductPackagingService\Type\PartNumberIdentifierType>
     */
    private $partNumber;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\PartNumberIdentifierType|array<\Flexnet\ProductPackagingService\Type\PartNumberIdentifierType>  $partNumber
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\PartNumberIdentifierType|array $partNumber)
    {
        $this->partNumber = $partNumber;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\PartNumberIdentifierType|array<\Flexnet\ProductPackagingService\Type\PartNumberIdentifierType>  $partNumber
     */
    public static function create(\Flexnet\ProductPackagingService\Type\PartNumberIdentifierType|array $partNumber)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\PartNumberIdentifierType|array<\Flexnet\ProductPackagingService\Type\PartNumberIdentifierType>
     */
    public function getPartNumber(): \Flexnet\ProductPackagingService\Type\PartNumberIdentifierType|array
    {
        return $this->partNumber;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\PartNumberIdentifierType|array<\Flexnet\ProductPackagingService\Type\PartNumberIdentifierType>  $partNumber
     */
    public function withPartNumber(\Flexnet\ProductPackagingService\Type\PartNumberIdentifierType|array $partNumber): \Flexnet\ProductPackagingService\Type\PartNumbersSimpleListType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }
}

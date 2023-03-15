<?php

namespace Flexnet\ProductPackagingService\Type;

class PartNumbersListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType|array<\Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType>
     */
    private $partNumber;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType|array<\Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType>  $partNumber
     */
    public function __construct(PartNumberIdentifierWithModelType|array $partNumber)
    {
        $this->partNumber = $partNumber;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType|array<\Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType>  $partNumber
     */
    public static function create(PartNumberIdentifierWithModelType|array $partNumber)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType|array<\Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType>
     */
    public function getPartNumber(): PartNumberIdentifierWithModelType|array
    {
        return $this->partNumber;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType|array<\Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType>  $partNumber
     */
    public function withPartNumber(PartNumberIdentifierWithModelType|array $partNumber): PartNumbersListType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }
}

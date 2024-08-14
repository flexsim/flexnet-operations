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
    public function __construct(\Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType|array $partNumber)
    {
        $this->partNumber = $partNumber;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType|array<\Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType>  $partNumber
     */
    public static function create(\Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType|array $partNumber)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType|array<\Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType>
     */
    public function getPartNumber(): \Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType|array
    {
        return $this->partNumber;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType|array<\Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType>  $partNumber
     */
    public function withPartNumber(\Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType|array $partNumber): \Flexnet\ProductPackagingService\Type\PartNumbersListType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }
}

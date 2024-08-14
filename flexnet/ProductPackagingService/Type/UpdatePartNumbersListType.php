<?php

namespace Flexnet\ProductPackagingService\Type;

class UpdatePartNumbersListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType|array<\Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType>|null
     */
    private $partNumber;

    /**
     * @var string
     */
    private $opType;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType|array<\Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType>|null  $partNumber
     */
    public function __construct(string $opType, \Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType|array|null $partNumber = null)
    {
        $this->opType = $opType;
        $this->partNumber = $partNumber;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType|array<\Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType>|null  $partNumber
     */
    public static function create(string $opType, \Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType|array|null $partNumber = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType|array<\Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType>|null
     */
    public function getPartNumber(): \Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType|array|null
    {
        return $this->partNumber;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType|array<\Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType>|null  $partNumber
     */
    public function withPartNumber(\Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType|array|null $partNumber): \Flexnet\ProductPackagingService\Type\UpdatePartNumbersListType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getOpType(): string
    {
        return $this->opType;
    }

    public function withOpType(string $opType): \Flexnet\ProductPackagingService\Type\UpdatePartNumbersListType
    {
        $new = clone $this;
        $new->opType = $opType;

        return $new;
    }
}

<?php

namespace Flexnet\ProductPackagingService\Type;

class UpdatePartNumbersSimpleListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\PartNumberIdentifierType|array<\Flexnet\ProductPackagingService\Type\PartNumberIdentifierType>|null
     */
    private $partNumber;

    /**
     * @var \Flexnet\ProductPackagingService\Type\CollectionOperationType
     */
    private $opType;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\PartNumberIdentifierType|array<\Flexnet\ProductPackagingService\Type\PartNumberIdentifierType>|null  $partNumber
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\CollectionOperationType $opType, \Flexnet\ProductPackagingService\Type\PartNumberIdentifierType|array|null $partNumber = null)
    {
        $this->opType = $opType;
        $this->partNumber = $partNumber;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\PartNumberIdentifierType|array<\Flexnet\ProductPackagingService\Type\PartNumberIdentifierType>|null  $partNumber
     */
    public static function create(\Flexnet\ProductPackagingService\Type\CollectionOperationType $opType, \Flexnet\ProductPackagingService\Type\PartNumberIdentifierType|array|null $partNumber = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\PartNumberIdentifierType|array<\Flexnet\ProductPackagingService\Type\PartNumberIdentifierType>|null
     */
    public function getPartNumber(): \Flexnet\ProductPackagingService\Type\PartNumberIdentifierType|array|null
    {
        return $this->partNumber;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\PartNumberIdentifierType|array<\Flexnet\ProductPackagingService\Type\PartNumberIdentifierType>|null  $partNumber
     */
    public function withPartNumber(\Flexnet\ProductPackagingService\Type\PartNumberIdentifierType|array|null $partNumber): \Flexnet\ProductPackagingService\Type\UpdatePartNumbersSimpleListType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getOpType(): \Flexnet\ProductPackagingService\Type\CollectionOperationType
    {
        return $this->opType;
    }

    public function withOpType(\Flexnet\ProductPackagingService\Type\CollectionOperationType $opType): \Flexnet\ProductPackagingService\Type\UpdatePartNumbersSimpleListType
    {
        $new = clone $this;
        $new->opType = $opType;

        return $new;
    }
}

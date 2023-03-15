<?php

namespace Flexnet\ProductPackagingService\Type;

class UpdatePartNumbersSimpleListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\PartNumberIdentifierType|array<\Flexnet\ProductPackagingService\Type\PartNumberIdentifierType>|null
     */
    private $partNumber;

    /**
     * @var string
     */
    private $opType;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\PartNumberIdentifierType|array<\Flexnet\ProductPackagingService\Type\PartNumberIdentifierType>|null  $partNumber
     */
    public function __construct(string $opType, PartNumberIdentifierType|array|null $partNumber = null)
    {
        $this->opType = $opType;
        $this->partNumber = $partNumber;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\PartNumberIdentifierType|array<\Flexnet\ProductPackagingService\Type\PartNumberIdentifierType>|null  $partNumber
     */
    public static function create(string $opType, PartNumberIdentifierType|array|null $partNumber = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\PartNumberIdentifierType|array<\Flexnet\ProductPackagingService\Type\PartNumberIdentifierType>|null
     */
    public function getPartNumber(): PartNumberIdentifierType|array|null
    {
        return $this->partNumber;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\PartNumberIdentifierType|array<\Flexnet\ProductPackagingService\Type\PartNumberIdentifierType>|null  $partNumber
     */
    public function withPartNumber(PartNumberIdentifierType|array|null $partNumber): UpdatePartNumbersSimpleListType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getOpType(): string
    {
        return $this->opType;
    }

    public function withOpType(string $opType): UpdatePartNumbersSimpleListType
    {
        $new = clone $this;
        $new->opType = $opType;

        return $new;
    }
}

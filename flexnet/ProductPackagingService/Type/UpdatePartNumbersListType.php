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
    public function __construct(string $opType, PartNumberIdentifierWithModelType|array $partNumber = null)
    {
        $this->opType = $opType;
        $this->partNumber = $partNumber;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType|array<\Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType>|null  $partNumber
     */
    public static function create(string $opType, PartNumberIdentifierWithModelType|array $partNumber = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType|array<\Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType>|null
     */
    public function getPartNumber(): PartNumberIdentifierWithModelType|array|null
    {
        return $this->partNumber;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType|array<\Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType>|null  $partNumber
     */
    public function withPartNumber(PartNumberIdentifierWithModelType|array|null $partNumber): UpdatePartNumbersListType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getOpType(): string
    {
        return $this->opType;
    }

    public function withOpType(string $opType): UpdatePartNumbersListType
    {
        $new = clone $this;
        $new->opType = $opType;

        return $new;
    }
}

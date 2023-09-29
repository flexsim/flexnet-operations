<?php

namespace Flexnet\ProductPackagingService\Type;

class PartNumberDataListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\PartNumberDataType|array<\Flexnet\ProductPackagingService\Type\PartNumberDataType>|null
     */
    private $partNumber;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\PartNumberDataType|array<\Flexnet\ProductPackagingService\Type\PartNumberDataType>|null  $partNumber
     */
    public function __construct(PartNumberDataType|array $partNumber = null)
    {
        $this->partNumber = $partNumber;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\PartNumberDataType|array<\Flexnet\ProductPackagingService\Type\PartNumberDataType>|null  $partNumber
     */
    public static function create(PartNumberDataType|array $partNumber = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\PartNumberDataType|array<\Flexnet\ProductPackagingService\Type\PartNumberDataType>|null
     */
    public function getPartNumber(): PartNumberDataType|array|null
    {
        return $this->partNumber;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\PartNumberDataType|array<\Flexnet\ProductPackagingService\Type\PartNumberDataType>|null  $partNumber
     */
    public function withPartNumber(PartNumberDataType|array|null $partNumber): PartNumberDataListType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }
}

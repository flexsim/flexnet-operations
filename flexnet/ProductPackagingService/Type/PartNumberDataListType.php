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
    public function __construct(\Flexnet\ProductPackagingService\Type\PartNumberDataType|array|null $partNumber = null)
    {
        $this->partNumber = $partNumber;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\PartNumberDataType|array<\Flexnet\ProductPackagingService\Type\PartNumberDataType>|null  $partNumber
     */
    public static function create(\Flexnet\ProductPackagingService\Type\PartNumberDataType|array|null $partNumber = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\PartNumberDataType|array<\Flexnet\ProductPackagingService\Type\PartNumberDataType>|null
     */
    public function getPartNumber(): \Flexnet\ProductPackagingService\Type\PartNumberDataType|array|null
    {
        return $this->partNumber;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\PartNumberDataType|array<\Flexnet\ProductPackagingService\Type\PartNumberDataType>|null  $partNumber
     */
    public function withPartNumber(\Flexnet\ProductPackagingService\Type\PartNumberDataType|array|null $partNumber): \Flexnet\ProductPackagingService\Type\PartNumberDataListType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }
}

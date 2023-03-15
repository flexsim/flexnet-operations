<?php

namespace Flexnet\ProductPackagingService\Type;

class CreatedPartNumberDataListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\CreatedPartNumberDataType|array<\Flexnet\ProductPackagingService\Type\CreatedPartNumberDataType>|null
     */
    private $createdPartNumber;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\CreatedPartNumberDataType|array<\Flexnet\ProductPackagingService\Type\CreatedPartNumberDataType>|null  $createdPartNumber
     */
    public function __construct(CreatedPartNumberDataType|array|null $createdPartNumber = null)
    {
        $this->createdPartNumber = $createdPartNumber;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreatedPartNumberDataType|array<\Flexnet\ProductPackagingService\Type\CreatedPartNumberDataType>|null  $createdPartNumber
     */
    public static function create(CreatedPartNumberDataType|array|null $createdPartNumber = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\CreatedPartNumberDataType|array<\Flexnet\ProductPackagingService\Type\CreatedPartNumberDataType>|null
     */
    public function getCreatedPartNumber(): CreatedPartNumberDataType|array|null
    {
        return $this->createdPartNumber;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreatedPartNumberDataType|array<\Flexnet\ProductPackagingService\Type\CreatedPartNumberDataType>|null  $createdPartNumber
     */
    public function withCreatedPartNumber(CreatedPartNumberDataType|array|null $createdPartNumber): CreatedPartNumberDataListType
    {
        $new = clone $this;
        $new->createdPartNumber = $createdPartNumber;

        return $new;
    }
}

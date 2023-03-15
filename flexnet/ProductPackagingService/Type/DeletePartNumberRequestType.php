<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeletePartNumberRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\DeletePartNumberDataType|array<\Flexnet\ProductPackagingService\Type\DeletePartNumberDataType>
     */
    private $partNumber;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\DeletePartNumberDataType|array<\Flexnet\ProductPackagingService\Type\DeletePartNumberDataType>  $partNumber
     */
    public function __construct(DeletePartNumberDataType|array $partNumber)
    {
        $this->partNumber = $partNumber;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\DeletePartNumberDataType|array<\Flexnet\ProductPackagingService\Type\DeletePartNumberDataType>  $partNumber
     */
    public static function create(DeletePartNumberDataType|array $partNumber)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\DeletePartNumberDataType|array<\Flexnet\ProductPackagingService\Type\DeletePartNumberDataType>
     */
    public function getPartNumber(): DeletePartNumberDataType|array
    {
        return $this->partNumber;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\DeletePartNumberDataType|array<\Flexnet\ProductPackagingService\Type\DeletePartNumberDataType>  $partNumber
     */
    public function withPartNumber(DeletePartNumberDataType|array $partNumber): DeletePartNumberRequestType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }
}

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
    public function __construct(\Flexnet\ProductPackagingService\Type\DeletePartNumberDataType|array $partNumber)
    {
        $this->partNumber = $partNumber;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\DeletePartNumberDataType|array<\Flexnet\ProductPackagingService\Type\DeletePartNumberDataType>  $partNumber
     */
    public static function create(\Flexnet\ProductPackagingService\Type\DeletePartNumberDataType|array $partNumber)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\DeletePartNumberDataType|array<\Flexnet\ProductPackagingService\Type\DeletePartNumberDataType>
     */
    public function getPartNumber(): \Flexnet\ProductPackagingService\Type\DeletePartNumberDataType|array
    {
        return $this->partNumber;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\DeletePartNumberDataType|array<\Flexnet\ProductPackagingService\Type\DeletePartNumberDataType>  $partNumber
     */
    public function withPartNumber(\Flexnet\ProductPackagingService\Type\DeletePartNumberDataType|array $partNumber): \Flexnet\ProductPackagingService\Type\DeletePartNumberRequestType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }
}

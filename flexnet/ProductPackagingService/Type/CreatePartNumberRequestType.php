<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreatePartNumberRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\CreatePartNumberDataType|array<\Flexnet\ProductPackagingService\Type\CreatePartNumberDataType>
     */
    private $partNumber;

    /**
     * @var bool|null
     */
    private $processSync;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\CreatePartNumberDataType|array<\Flexnet\ProductPackagingService\Type\CreatePartNumberDataType>  $partNumber
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\CreatePartNumberDataType|array $partNumber, ?bool $processSync = null)
    {
        $this->partNumber = $partNumber;
        $this->processSync = $processSync;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreatePartNumberDataType|array<\Flexnet\ProductPackagingService\Type\CreatePartNumberDataType>  $partNumber
     */
    public static function create(\Flexnet\ProductPackagingService\Type\CreatePartNumberDataType|array $partNumber, ?bool $processSync = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\CreatePartNumberDataType|array<\Flexnet\ProductPackagingService\Type\CreatePartNumberDataType>
     */
    public function getPartNumber(): \Flexnet\ProductPackagingService\Type\CreatePartNumberDataType|array
    {
        return $this->partNumber;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreatePartNumberDataType|array<\Flexnet\ProductPackagingService\Type\CreatePartNumberDataType>  $partNumber
     */
    public function withPartNumber(\Flexnet\ProductPackagingService\Type\CreatePartNumberDataType|array $partNumber): \Flexnet\ProductPackagingService\Type\CreatePartNumberRequestType
    {
        $new = clone $this;
        $new->partNumber = $partNumber;

        return $new;
    }

    public function getProcessSync(): ?bool
    {
        return $this->processSync;
    }

    public function withProcessSync(?bool $processSync): \Flexnet\ProductPackagingService\Type\CreatePartNumberRequestType
    {
        $new = clone $this;
        $new->processSync = $processSync;

        return $new;
    }
}

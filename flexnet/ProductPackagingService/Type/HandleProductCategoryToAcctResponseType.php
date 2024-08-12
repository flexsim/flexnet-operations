<?php

namespace Flexnet\ProductPackagingService\Type;

use Flexnet\ProductPackagingService\Result;

class HandleProductCategoryToAcctResponseType extends Result
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\StatusInfoType $statusInfo)
    {
        $this->statusInfo = $statusInfo;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\StatusInfoType $statusInfo)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): \Flexnet\ProductPackagingService\Type\StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(\Flexnet\ProductPackagingService\Type\StatusInfoType $statusInfo): \Flexnet\ProductPackagingService\Type\HandleProductCategoryToAcctResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }
}

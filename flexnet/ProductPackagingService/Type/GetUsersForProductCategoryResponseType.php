<?php

namespace Flexnet\ProductPackagingService\Type;

use Flexnet\ProductPackagingService\Result;

class GetUsersForProductCategoryResponseType extends Result
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\ProductPackagingService\Type\GetUsersForProductCategoryResponseDataType|null
     */
    private $userData;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\StatusInfoType $statusInfo, ?\Flexnet\ProductPackagingService\Type\GetUsersForProductCategoryResponseDataType $userData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->userData = $userData;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\StatusInfoType $statusInfo, ?\Flexnet\ProductPackagingService\Type\GetUsersForProductCategoryResponseDataType $userData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): \Flexnet\ProductPackagingService\Type\StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(\Flexnet\ProductPackagingService\Type\StatusInfoType $statusInfo): \Flexnet\ProductPackagingService\Type\GetUsersForProductCategoryResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getUserData(): ?\Flexnet\ProductPackagingService\Type\GetUsersForProductCategoryResponseDataType
    {
        return $this->userData;
    }

    public function withUserData(?\Flexnet\ProductPackagingService\Type\GetUsersForProductCategoryResponseDataType $userData): \Flexnet\ProductPackagingService\Type\GetUsersForProductCategoryResponseType
    {
        $new = clone $this;
        $new->userData = $userData;

        return $new;
    }
}

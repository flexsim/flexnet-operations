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
    public function __construct(StatusInfoType $statusInfo, GetUsersForProductCategoryResponseDataType $userData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->userData = $userData;
    }

    public static function create(StatusInfoType $statusInfo, GetUsersForProductCategoryResponseDataType $userData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): GetUsersForProductCategoryResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getUserData(): ?GetUsersForProductCategoryResponseDataType
    {
        return $this->userData;
    }

    public function withUserData(?GetUsersForProductCategoryResponseDataType $userData): GetUsersForProductCategoryResponseType
    {
        $new = clone $this;
        $new->userData = $userData;

        return $new;
    }
}

<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetUsersForProductCategoryResponseType implements ResultInterface
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
     *
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\GetUsersForProductCategoryResponseDataType|null  $userData
     */
    public function __construct(StatusInfoType $statusInfo, GetUsersForProductCategoryResponseDataType|null $userData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->userData = $userData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\GetUsersForProductCategoryResponseDataType|null  $userData
     */
    public static function create(StatusInfoType $statusInfo, GetUsersForProductCategoryResponseDataType|null $userData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\StatusInfoType
     */
    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     */
    public function withStatusInfo(StatusInfoType $statusInfo): GetUsersForProductCategoryResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\GetUsersForProductCategoryResponseDataType|null
     */
    public function getUserData(): GetUsersForProductCategoryResponseDataType|null
    {
        return $this->userData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\GetUsersForProductCategoryResponseDataType|null  $userData
     */
    public function withUserData(GetUsersForProductCategoryResponseDataType|null $userData): GetUsersForProductCategoryResponseType
    {
        $new = clone $this;
        $new->userData = $userData;

        return $new;
    }
}

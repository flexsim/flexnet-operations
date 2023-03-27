<?php

namespace Flexnet\ProductPackagingService\Type;

use Flexnet\ProductPackagingService\Result;

class GetModelIdentifiersResponseType extends Result
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\ProductPackagingService\Type\ModelIdentifiersDataListType|null
     */
    private $responseData;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\ModelIdentifiersDataListType|null  $responseData
     */
    public function __construct(StatusInfoType $statusInfo, ModelIdentifiersDataListType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\ModelIdentifiersDataListType|null  $responseData
     */
    public static function create(StatusInfoType $statusInfo, ModelIdentifiersDataListType|null $responseData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): GetModelIdentifiersResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\ModelIdentifiersDataListType|null
     */
    public function getResponseData(): ModelIdentifiersDataListType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ModelIdentifiersDataListType|null  $responseData
     */
    public function withResponseData(ModelIdentifiersDataListType|null $responseData): GetModelIdentifiersResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}

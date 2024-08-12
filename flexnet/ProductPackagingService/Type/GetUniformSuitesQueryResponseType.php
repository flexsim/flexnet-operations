<?php

namespace Flexnet\ProductPackagingService\Type;

use Flexnet\ProductPackagingService\Result;

class GetUniformSuitesQueryResponseType extends Result
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\ProductPackagingService\Type\GetUniformSuitesQueryResponseDataType|null
     */
    private $responseData;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\StatusInfoType $statusInfo, ?\Flexnet\ProductPackagingService\Type\GetUniformSuitesQueryResponseDataType $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\StatusInfoType $statusInfo, ?\Flexnet\ProductPackagingService\Type\GetUniformSuitesQueryResponseDataType $responseData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): \Flexnet\ProductPackagingService\Type\StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(\Flexnet\ProductPackagingService\Type\StatusInfoType $statusInfo): \Flexnet\ProductPackagingService\Type\GetUniformSuitesQueryResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getResponseData(): ?\Flexnet\ProductPackagingService\Type\GetUniformSuitesQueryResponseDataType
    {
        return $this->responseData;
    }

    public function withResponseData(?\Flexnet\ProductPackagingService\Type\GetUniformSuitesQueryResponseDataType $responseData): \Flexnet\ProductPackagingService\Type\GetUniformSuitesQueryResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}

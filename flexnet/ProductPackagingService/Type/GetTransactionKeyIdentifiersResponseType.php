<?php

namespace Flexnet\ProductPackagingService\Type;

use Flexnet\ProductPackagingService\Result;

class GetTransactionKeyIdentifiersResponseType extends Result
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\ProductPackagingService\Type\TransactionKeyIdentifiersDataListType|null
     */
    private $responseData;

    /**
     * Constructor
     */
    public function __construct(StatusInfoType $statusInfo, TransactionKeyIdentifiersDataListType $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
    }

    public static function create(StatusInfoType $statusInfo, TransactionKeyIdentifiersDataListType $responseData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): GetTransactionKeyIdentifiersResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getResponseData(): ?TransactionKeyIdentifiersDataListType
    {
        return $this->responseData;
    }

    public function withResponseData(?TransactionKeyIdentifiersDataListType $responseData): GetTransactionKeyIdentifiersResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}

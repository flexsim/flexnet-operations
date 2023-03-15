<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetTransactionKeyIdentifiersResponseType implements ResultInterface
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
     *
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\TransactionKeyIdentifiersDataListType|null  $responseData
     */
    public function __construct(StatusInfoType $statusInfo, TransactionKeyIdentifiersDataListType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\TransactionKeyIdentifiersDataListType|null  $responseData
     */
    public static function create(StatusInfoType $statusInfo, TransactionKeyIdentifiersDataListType|null $responseData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): GetTransactionKeyIdentifiersResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\TransactionKeyIdentifiersDataListType|null
     */
    public function getResponseData(): TransactionKeyIdentifiersDataListType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\TransactionKeyIdentifiersDataListType|null  $responseData
     */
    public function withResponseData(TransactionKeyIdentifiersDataListType|null $responseData): GetTransactionKeyIdentifiersResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}

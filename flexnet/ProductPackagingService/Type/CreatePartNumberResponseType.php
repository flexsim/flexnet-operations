<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CreatePartNumberResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedPartNumberDataListType|null
     */
    private $failedData;

    /**
     * @var \Flexnet\ProductPackagingService\Type\CreatedPartNumberDataListType|null
     */
    private $responseData;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\FailedPartNumberDataListType|null  $failedData
     * @param  \Flexnet\ProductPackagingService\Type\CreatedPartNumberDataListType|null  $responseData
     */
    public function __construct(StatusInfoType $statusInfo, FailedPartNumberDataListType|null $failedData = null, CreatedPartNumberDataListType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\ProductPackagingService\Type\FailedPartNumberDataListType|null  $failedData
     * @param  \Flexnet\ProductPackagingService\Type\CreatedPartNumberDataListType|null  $responseData
     */
    public static function create(StatusInfoType $statusInfo, FailedPartNumberDataListType|null $failedData = null, CreatedPartNumberDataListType|null $responseData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): CreatePartNumberResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedPartNumberDataListType|null
     */
    public function getFailedData(): FailedPartNumberDataListType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedPartNumberDataListType|null  $failedData
     */
    public function withFailedData(FailedPartNumberDataListType|null $failedData): CreatePartNumberResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\CreatedPartNumberDataListType|null
     */
    public function getResponseData(): CreatedPartNumberDataListType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreatedPartNumberDataListType|null  $responseData
     */
    public function withResponseData(CreatedPartNumberDataListType|null $responseData): CreatePartNumberResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}

<?php

namespace Flexnet\LicenseService\Type;

use Flexnet\LicenseService\Result;

class GetConsolidatedFulfillmentsQueryResponseType extends Result
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentsQueryResponseDataType|null
     */
    private $responseData;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentsQueryResponseDataType|null  $responseData
     */
    public function __construct(StatusInfoType $statusInfo, GetConsolidatedFulfillmentsQueryResponseDataType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentsQueryResponseDataType|null  $responseData
     */
    public static function create(StatusInfoType $statusInfo, GetConsolidatedFulfillmentsQueryResponseDataType|null $responseData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\StatusInfoType
     */
    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     */
    public function withStatusInfo(StatusInfoType $statusInfo): GetConsolidatedFulfillmentsQueryResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentsQueryResponseDataType|null
     */
    public function getResponseData(): GetConsolidatedFulfillmentsQueryResponseDataType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentsQueryResponseDataType|null  $responseData
     */
    public function withResponseData(GetConsolidatedFulfillmentsQueryResponseDataType|null $responseData): GetConsolidatedFulfillmentsQueryResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}

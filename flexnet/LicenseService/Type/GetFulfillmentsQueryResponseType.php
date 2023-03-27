<?php

namespace Flexnet\LicenseService\Type;

use Flexnet\LicenseService\Result;

class GetFulfillmentsQueryResponseType extends Result
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\LicenseService\Type\GetFulfillmentsQueryResponseDataType|null
     */
    private $responseData;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\GetFulfillmentsQueryResponseDataType|null  $responseData
     */
    public function __construct(StatusInfoType $statusInfo, GetFulfillmentsQueryResponseDataType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\GetFulfillmentsQueryResponseDataType|null  $responseData
     */
    public static function create(StatusInfoType $statusInfo, GetFulfillmentsQueryResponseDataType|null $responseData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): GetFulfillmentsQueryResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\GetFulfillmentsQueryResponseDataType|null
     */
    public function getResponseData(): GetFulfillmentsQueryResponseDataType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\GetFulfillmentsQueryResponseDataType|null  $responseData
     */
    public function withResponseData(GetFulfillmentsQueryResponseDataType|null $responseData): GetFulfillmentsQueryResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}

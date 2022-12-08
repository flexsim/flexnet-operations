<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetConsolidatedFulfillmentsQueryResponseType implements ResultInterface
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
     * @param \Flexnet\LicenseService\Type\StatusInfoType $statusInfo
     * @param \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentsQueryResponseDataType|null $responseData
     */
    public function __construct(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentsQueryResponseDataType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\StatusInfoType $statusInfo
     * @param \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentsQueryResponseDataType|null $responseData
     */
    public static function create(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentsQueryResponseDataType|null $responseData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\StatusInfoType
     */
    public function getStatusInfo() : \Flexnet\LicenseService\Type\StatusInfoType
    {
        return $this->statusInfo;
    }

    /**
     * @param \Flexnet\LicenseService\Type\StatusInfoType $statusInfo
     * @return GetConsolidatedFulfillmentsQueryResponseType
     */
    public function withStatusInfo(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo) : \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentsQueryResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentsQueryResponseDataType|null
     */
    public function getResponseData() : \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentsQueryResponseDataType|null
    {
        return $this->responseData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentsQueryResponseDataType|null $responseData
     * @return GetConsolidatedFulfillmentsQueryResponseType
     */
    public function withResponseData(\Flexnet\LicenseService\Type\GetConsolidatedFulfillmentsQueryResponseDataType|null $responseData) : \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentsQueryResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}


<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ConsolidateFulfillmentsResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\LicenseService\Type\ConsolidatedResponseDataType|null
     */
    private $responseData;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\ConsolidatedResponseDataType|null  $responseData
     */
    public function __construct(StatusInfoType $statusInfo, ConsolidatedResponseDataType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\ConsolidatedResponseDataType|null  $responseData
     */
    public static function create(StatusInfoType $statusInfo, ConsolidatedResponseDataType|null $responseData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): ConsolidateFulfillmentsResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\ConsolidatedResponseDataType|null
     */
    public function getResponseData(): ConsolidatedResponseDataType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\ConsolidatedResponseDataType|null  $responseData
     */
    public function withResponseData(ConsolidatedResponseDataType|null $responseData): ConsolidateFulfillmentsResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}

<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CreateLicensesAsBatchResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\LicenseService\Type\CreateLicensesAsBatchResponseDataType|null
     */
    private $responseData;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\CreateLicensesAsBatchResponseDataType|null  $responseData
     */
    public function __construct(StatusInfoType $statusInfo, CreateLicensesAsBatchResponseDataType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\CreateLicensesAsBatchResponseDataType|null  $responseData
     */
    public static function create(StatusInfoType $statusInfo, CreateLicensesAsBatchResponseDataType|null $responseData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): CreateLicensesAsBatchResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\CreateLicensesAsBatchResponseDataType|null
     */
    public function getResponseData(): CreateLicensesAsBatchResponseDataType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CreateLicensesAsBatchResponseDataType|null  $responseData
     */
    public function withResponseData(CreateLicensesAsBatchResponseDataType|null $responseData): CreateLicensesAsBatchResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}

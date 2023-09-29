<?php

namespace Flexnet\LicenseService\Type;

use Flexnet\LicenseService\Result;

class CreateLicensesAsBatchResponseType extends Result
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
     */
    public function __construct(StatusInfoType $statusInfo, CreateLicensesAsBatchResponseDataType $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
    }

    public static function create(StatusInfoType $statusInfo, CreateLicensesAsBatchResponseDataType $responseData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): CreateLicensesAsBatchResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getResponseData(): ?CreateLicensesAsBatchResponseDataType
    {
        return $this->responseData;
    }

    public function withResponseData(?CreateLicensesAsBatchResponseDataType $responseData): CreateLicensesAsBatchResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}

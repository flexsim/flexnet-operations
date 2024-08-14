<?php

namespace Flexnet\LicenseService\Type;

use Flexnet\LicenseService\Result;

class DeleteOnholdFulfillmentsResponseType extends Result
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\LicenseService\Type\FailedOnholdFulfillmentListType|null
     */
    private $failedData;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, ?\Flexnet\LicenseService\Type\FailedOnholdFulfillmentListType $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
    }

    public static function create(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, ?\Flexnet\LicenseService\Type\FailedOnholdFulfillmentListType $failedData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): \Flexnet\LicenseService\Type\StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo): \Flexnet\LicenseService\Type\DeleteOnholdFulfillmentsResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getFailedData(): ?\Flexnet\LicenseService\Type\FailedOnholdFulfillmentListType
    {
        return $this->failedData;
    }

    public function withFailedData(?\Flexnet\LicenseService\Type\FailedOnholdFulfillmentListType $failedData): \Flexnet\LicenseService\Type\DeleteOnholdFulfillmentsResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}

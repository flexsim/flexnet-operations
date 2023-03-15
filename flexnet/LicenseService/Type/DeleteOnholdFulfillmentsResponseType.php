<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DeleteOnholdFulfillmentsResponseType implements ResultInterface
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
     *
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\FailedOnholdFulfillmentListType|null  $failedData
     */
    public function __construct(StatusInfoType $statusInfo, FailedOnholdFulfillmentListType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\FailedOnholdFulfillmentListType|null  $failedData
     */
    public static function create(StatusInfoType $statusInfo, FailedOnholdFulfillmentListType|null $failedData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): DeleteOnholdFulfillmentsResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedOnholdFulfillmentListType|null
     */
    public function getFailedData(): FailedOnholdFulfillmentListType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedOnholdFulfillmentListType|null  $failedData
     */
    public function withFailedData(FailedOnholdFulfillmentListType|null $failedData): DeleteOnholdFulfillmentsResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}

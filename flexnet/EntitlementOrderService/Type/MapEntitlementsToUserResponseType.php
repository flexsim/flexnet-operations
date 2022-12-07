<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class MapEntitlementsToUserResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedMapEntitlementsToUserDataListType|null
     */
    private $failedData;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\FailedMapEntitlementsToUserDataListType|null  $failedData
     */
    public function __construct(StatusInfoType $statusInfo, FailedMapEntitlementsToUserDataListType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\FailedMapEntitlementsToUserDataListType|null  $failedData
     */
    public static function create(StatusInfoType $statusInfo, FailedMapEntitlementsToUserDataListType|null $failedData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @return MapEntitlementsToUserResponseType
     */
    public function withStatusInfo(StatusInfoType $statusInfo): MapEntitlementsToUserResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedMapEntitlementsToUserDataListType|null
     */
    public function getFailedData(): FailedMapEntitlementsToUserDataListType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedMapEntitlementsToUserDataListType|null  $failedData
     * @return MapEntitlementsToUserResponseType
     */
    public function withFailedData(FailedMapEntitlementsToUserDataListType|null $failedData): MapEntitlementsToUserResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}

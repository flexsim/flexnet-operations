<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SearchEntitlementResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementDataType>|null
     */
    private $entitlement;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementDataType>|null  $entitlement
     */
    public function __construct(StatusInfoType $statusInfo, EntitlementDataType|array|null $entitlement = null)
    {
        $this->statusInfo = $statusInfo;
        $this->entitlement = $entitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementDataType>|null  $entitlement
     */
    public static function create(StatusInfoType $statusInfo, EntitlementDataType|array|null $entitlement = null)
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
     */
    public function withStatusInfo(StatusInfoType $statusInfo): SearchEntitlementResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementDataType>|null
     */
    public function getEntitlement(): EntitlementDataType|array|null
    {
        return $this->entitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\EntitlementDataType>|null  $entitlement
     */
    public function withEntitlement(EntitlementDataType|array|null $entitlement): SearchEntitlementResponseType
    {
        $new = clone $this;
        $new->entitlement = $entitlement;

        return $new;
    }
}

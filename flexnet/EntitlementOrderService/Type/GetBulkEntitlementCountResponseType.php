<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetBulkEntitlementCountResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var int|null
     */
    private $count;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  int|null  $count
     */
    public function __construct(StatusInfoType $statusInfo, int|null $count = null)
    {
        $this->statusInfo = $statusInfo;
        $this->count = $count;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  int|null  $count
     */
    public static function create(StatusInfoType $statusInfo, int|null $count = null)
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
     * @return GetBulkEntitlementCountResponseType
     */
    public function withStatusInfo(StatusInfoType $statusInfo): GetBulkEntitlementCountResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return int|null
     */
    public function getCount(): int|null
    {
        return $this->count;
    }

    /**
     * @param  int|null  $count
     * @return GetBulkEntitlementCountResponseType
     */
    public function withCount(int|null $count): GetBulkEntitlementCountResponseType
    {
        $new = clone $this;
        $new->count = $count;

        return $new;
    }
}

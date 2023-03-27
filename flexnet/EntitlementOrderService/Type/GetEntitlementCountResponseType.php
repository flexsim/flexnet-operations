<?php

namespace Flexnet\EntitlementOrderService\Type;

use Flexnet\EntitlementOrderService\Result;

class GetEntitlementCountResponseType extends Result
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
     */
    public function withStatusInfo(StatusInfoType $statusInfo): GetEntitlementCountResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getCount(): int|null
    {
        return $this->count;
    }

    public function withCount(int|null $count): GetEntitlementCountResponseType
    {
        $new = clone $this;
        $new->count = $count;

        return $new;
    }
}

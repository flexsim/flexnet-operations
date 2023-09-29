<?php

namespace Flexnet\EntitlementOrderService\Type;

use Flexnet\EntitlementOrderService\Result;

class GetActivatableItemCountResponseType extends Result
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
     */
    public function __construct(StatusInfoType $statusInfo, int $count = null)
    {
        $this->statusInfo = $statusInfo;
        $this->count = $count;
    }

    public static function create(StatusInfoType $statusInfo, int $count = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): GetActivatableItemCountResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getCount(): ?int
    {
        return $this->count;
    }

    public function withCount(?int $count): GetActivatableItemCountResponseType
    {
        $new = clone $this;
        $new->count = $count;

        return $new;
    }
}

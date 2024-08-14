<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedMapEntitlementsToUserDataListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedIdDataType|array<\Flexnet\EntitlementOrderService\Type\FailedIdDataType>
     */
    private $failedId;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\FailedIdDataType|array<\Flexnet\EntitlementOrderService\Type\FailedIdDataType>  $failedId
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\FailedIdDataType|array $failedId)
    {
        $this->failedId = $failedId;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedIdDataType|array<\Flexnet\EntitlementOrderService\Type\FailedIdDataType>  $failedId
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\FailedIdDataType|array $failedId)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedIdDataType|array<\Flexnet\EntitlementOrderService\Type\FailedIdDataType>
     */
    public function getFailedId(): \Flexnet\EntitlementOrderService\Type\FailedIdDataType|array
    {
        return $this->failedId;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedIdDataType|array<\Flexnet\EntitlementOrderService\Type\FailedIdDataType>  $failedId
     */
    public function withFailedId(\Flexnet\EntitlementOrderService\Type\FailedIdDataType|array $failedId): \Flexnet\EntitlementOrderService\Type\FailedMapEntitlementsToUserDataListType
    {
        $new = clone $this;
        $new->failedId = $failedId;

        return $new;
    }
}

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
    public function __construct(FailedIdDataType|array $failedId)
    {
        $this->failedId = $failedId;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedIdDataType|array<\Flexnet\EntitlementOrderService\Type\FailedIdDataType>  $failedId
     */
    public static function create(FailedIdDataType|array $failedId)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedIdDataType|array<\Flexnet\EntitlementOrderService\Type\FailedIdDataType>
     */
    public function getFailedId(): FailedIdDataType|array
    {
        return $this->failedId;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedIdDataType|array<\Flexnet\EntitlementOrderService\Type\FailedIdDataType>  $failedId
     * @return FailedMapEntitlementsToUserDataListType
     */
    public function withFailedId(FailedIdDataType|array $failedId): FailedMapEntitlementsToUserDataListType
    {
        $new = clone $this;
        $new->failedId = $failedId;

        return $new;
    }
}

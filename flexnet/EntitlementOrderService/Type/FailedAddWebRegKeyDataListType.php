<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedAddWebRegKeyDataListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedAddWebRegKeyDataType|array<\Flexnet\EntitlementOrderService\Type\FailedAddWebRegKeyDataType>|null
     */
    private $failedWebRegKeyData;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\FailedAddWebRegKeyDataType|array<\Flexnet\EntitlementOrderService\Type\FailedAddWebRegKeyDataType>|null  $failedWebRegKeyData
     */
    public function __construct(FailedAddWebRegKeyDataType|array|null $failedWebRegKeyData = null)
    {
        $this->failedWebRegKeyData = $failedWebRegKeyData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedAddWebRegKeyDataType|array<\Flexnet\EntitlementOrderService\Type\FailedAddWebRegKeyDataType>|null  $failedWebRegKeyData
     */
    public static function create(FailedAddWebRegKeyDataType|array|null $failedWebRegKeyData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedAddWebRegKeyDataType|array<\Flexnet\EntitlementOrderService\Type\FailedAddWebRegKeyDataType>|null
     */
    public function getFailedWebRegKeyData(): FailedAddWebRegKeyDataType|array|null
    {
        return $this->failedWebRegKeyData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedAddWebRegKeyDataType|array<\Flexnet\EntitlementOrderService\Type\FailedAddWebRegKeyDataType>|null  $failedWebRegKeyData
     * @return FailedAddWebRegKeyDataListType
     */
    public function withFailedWebRegKeyData(FailedAddWebRegKeyDataType|array|null $failedWebRegKeyData): FailedAddWebRegKeyDataListType
    {
        $new = clone $this;
        $new->failedWebRegKeyData = $failedWebRegKeyData;

        return $new;
    }
}

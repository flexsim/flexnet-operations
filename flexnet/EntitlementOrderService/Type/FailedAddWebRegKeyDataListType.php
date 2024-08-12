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
    public function __construct(\Flexnet\EntitlementOrderService\Type\FailedAddWebRegKeyDataType|array|null $failedWebRegKeyData = null)
    {
        $this->failedWebRegKeyData = $failedWebRegKeyData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedAddWebRegKeyDataType|array<\Flexnet\EntitlementOrderService\Type\FailedAddWebRegKeyDataType>|null  $failedWebRegKeyData
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\FailedAddWebRegKeyDataType|array|null $failedWebRegKeyData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedAddWebRegKeyDataType|array<\Flexnet\EntitlementOrderService\Type\FailedAddWebRegKeyDataType>|null
     */
    public function getFailedWebRegKeyData(): \Flexnet\EntitlementOrderService\Type\FailedAddWebRegKeyDataType|array|null
    {
        return $this->failedWebRegKeyData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedAddWebRegKeyDataType|array<\Flexnet\EntitlementOrderService\Type\FailedAddWebRegKeyDataType>|null  $failedWebRegKeyData
     */
    public function withFailedWebRegKeyData(\Flexnet\EntitlementOrderService\Type\FailedAddWebRegKeyDataType|array|null $failedWebRegKeyData): \Flexnet\EntitlementOrderService\Type\FailedAddWebRegKeyDataListType
    {
        $new = clone $this;
        $new->failedWebRegKeyData = $failedWebRegKeyData;

        return $new;
    }
}

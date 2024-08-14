<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedDeleteWebRegKeyListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedDeleteWebRegKeyDataType|array<\Flexnet\EntitlementOrderService\Type\FailedDeleteWebRegKeyDataType>|null
     */
    private $failedWebRegKey;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\FailedDeleteWebRegKeyDataType|array<\Flexnet\EntitlementOrderService\Type\FailedDeleteWebRegKeyDataType>|null  $failedWebRegKey
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\FailedDeleteWebRegKeyDataType|array|null $failedWebRegKey = null)
    {
        $this->failedWebRegKey = $failedWebRegKey;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedDeleteWebRegKeyDataType|array<\Flexnet\EntitlementOrderService\Type\FailedDeleteWebRegKeyDataType>|null  $failedWebRegKey
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\FailedDeleteWebRegKeyDataType|array|null $failedWebRegKey = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedDeleteWebRegKeyDataType|array<\Flexnet\EntitlementOrderService\Type\FailedDeleteWebRegKeyDataType>|null
     */
    public function getFailedWebRegKey(): \Flexnet\EntitlementOrderService\Type\FailedDeleteWebRegKeyDataType|array|null
    {
        return $this->failedWebRegKey;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedDeleteWebRegKeyDataType|array<\Flexnet\EntitlementOrderService\Type\FailedDeleteWebRegKeyDataType>|null  $failedWebRegKey
     */
    public function withFailedWebRegKey(\Flexnet\EntitlementOrderService\Type\FailedDeleteWebRegKeyDataType|array|null $failedWebRegKey): \Flexnet\EntitlementOrderService\Type\FailedDeleteWebRegKeyListType
    {
        $new = clone $this;
        $new->failedWebRegKey = $failedWebRegKey;

        return $new;
    }
}

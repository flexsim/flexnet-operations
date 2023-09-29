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
    public function __construct(FailedDeleteWebRegKeyDataType|array $failedWebRegKey = null)
    {
        $this->failedWebRegKey = $failedWebRegKey;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedDeleteWebRegKeyDataType|array<\Flexnet\EntitlementOrderService\Type\FailedDeleteWebRegKeyDataType>|null  $failedWebRegKey
     */
    public static function create(FailedDeleteWebRegKeyDataType|array $failedWebRegKey = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedDeleteWebRegKeyDataType|array<\Flexnet\EntitlementOrderService\Type\FailedDeleteWebRegKeyDataType>|null
     */
    public function getFailedWebRegKey(): FailedDeleteWebRegKeyDataType|array|null
    {
        return $this->failedWebRegKey;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedDeleteWebRegKeyDataType|array<\Flexnet\EntitlementOrderService\Type\FailedDeleteWebRegKeyDataType>|null  $failedWebRegKey
     */
    public function withFailedWebRegKey(FailedDeleteWebRegKeyDataType|array|null $failedWebRegKey): FailedDeleteWebRegKeyListType
    {
        $new = clone $this;
        $new->failedWebRegKey = $failedWebRegKey;

        return $new;
    }
}

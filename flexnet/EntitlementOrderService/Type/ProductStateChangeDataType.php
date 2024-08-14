<?php

namespace Flexnet\EntitlementOrderService\Type;

class ProductStateChangeDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\ProductIdentifierType
     */
    private $productIdentifier;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\StateChangeDataType>|null
     */
    private $stateChangeRecord;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\StateChangeDataType>|null  $stateChangeRecord
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\ProductIdentifierType $productIdentifier, \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array|null $stateChangeRecord = null)
    {
        $this->productIdentifier = $productIdentifier;
        $this->stateChangeRecord = $stateChangeRecord;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\StateChangeDataType>|null  $stateChangeRecord
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\ProductIdentifierType $productIdentifier, \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array|null $stateChangeRecord = null)
    {
        return new static(...\func_get_args());
    }

    public function getProductIdentifier(): \Flexnet\EntitlementOrderService\Type\ProductIdentifierType
    {
        return $this->productIdentifier;
    }

    public function withProductIdentifier(\Flexnet\EntitlementOrderService\Type\ProductIdentifierType $productIdentifier): \Flexnet\EntitlementOrderService\Type\ProductStateChangeDataType
    {
        $new = clone $this;
        $new->productIdentifier = $productIdentifier;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\StateChangeDataType>|null
     */
    public function getStateChangeRecord(): \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array|null
    {
        return $this->stateChangeRecord;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\StateChangeDataType>|null  $stateChangeRecord
     */
    public function withStateChangeRecord(\Flexnet\EntitlementOrderService\Type\StateChangeDataType|array|null $stateChangeRecord): \Flexnet\EntitlementOrderService\Type\ProductStateChangeDataType
    {
        $new = clone $this;
        $new->stateChangeRecord = $stateChangeRecord;

        return $new;
    }
}

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
     * @param  \Flexnet\EntitlementOrderService\Type\ProductIdentifierType  $productIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\StateChangeDataType>|null  $stateChangeRecord
     */
    public function __construct(ProductIdentifierType $productIdentifier, StateChangeDataType|array|null $stateChangeRecord = null)
    {
        $this->productIdentifier = $productIdentifier;
        $this->stateChangeRecord = $stateChangeRecord;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\ProductIdentifierType  $productIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\StateChangeDataType>|null  $stateChangeRecord
     */
    public static function create(ProductIdentifierType $productIdentifier, StateChangeDataType|array|null $stateChangeRecord = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\ProductIdentifierType
     */
    public function getProductIdentifier(): ProductIdentifierType
    {
        return $this->productIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\ProductIdentifierType  $productIdentifier
     */
    public function withProductIdentifier(ProductIdentifierType $productIdentifier): ProductStateChangeDataType
    {
        $new = clone $this;
        $new->productIdentifier = $productIdentifier;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\StateChangeDataType>|null
     */
    public function getStateChangeRecord(): StateChangeDataType|array|null
    {
        return $this->stateChangeRecord;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\StateChangeDataType>|null  $stateChangeRecord
     */
    public function withStateChangeRecord(StateChangeDataType|array|null $stateChangeRecord): ProductStateChangeDataType
    {
        $new = clone $this;
        $new->stateChangeRecord = $stateChangeRecord;

        return $new;
    }
}

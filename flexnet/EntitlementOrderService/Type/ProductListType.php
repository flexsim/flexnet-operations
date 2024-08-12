<?php

namespace Flexnet\EntitlementOrderService\Type;

class ProductListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\ProductIdentifierType|array<\Flexnet\EntitlementOrderService\Type\ProductIdentifierType>
     */
    private $productIdentifier;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\ProductIdentifierType|array<\Flexnet\EntitlementOrderService\Type\ProductIdentifierType>  $productIdentifier
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\ProductIdentifierType|array $productIdentifier)
    {
        $this->productIdentifier = $productIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\ProductIdentifierType|array<\Flexnet\EntitlementOrderService\Type\ProductIdentifierType>  $productIdentifier
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\ProductIdentifierType|array $productIdentifier)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\ProductIdentifierType|array<\Flexnet\EntitlementOrderService\Type\ProductIdentifierType>
     */
    public function getProductIdentifier(): \Flexnet\EntitlementOrderService\Type\ProductIdentifierType|array
    {
        return $this->productIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\ProductIdentifierType|array<\Flexnet\EntitlementOrderService\Type\ProductIdentifierType>  $productIdentifier
     */
    public function withProductIdentifier(\Flexnet\EntitlementOrderService\Type\ProductIdentifierType|array $productIdentifier): \Flexnet\EntitlementOrderService\Type\ProductListType
    {
        $new = clone $this;
        $new->productIdentifier = $productIdentifier;

        return $new;
    }
}

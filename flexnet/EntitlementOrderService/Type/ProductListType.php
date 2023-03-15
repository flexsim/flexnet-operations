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
    public function __construct(ProductIdentifierType|array $productIdentifier)
    {
        $this->productIdentifier = $productIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\ProductIdentifierType|array<\Flexnet\EntitlementOrderService\Type\ProductIdentifierType>  $productIdentifier
     */
    public static function create(ProductIdentifierType|array $productIdentifier)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\ProductIdentifierType|array<\Flexnet\EntitlementOrderService\Type\ProductIdentifierType>
     */
    public function getProductIdentifier(): ProductIdentifierType|array
    {
        return $this->productIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\ProductIdentifierType|array<\Flexnet\EntitlementOrderService\Type\ProductIdentifierType>  $productIdentifier
     */
    public function withProductIdentifier(ProductIdentifierType|array $productIdentifier): ProductListType
    {
        $new = clone $this;
        $new->productIdentifier = $productIdentifier;

        return $new;
    }
}

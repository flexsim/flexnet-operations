<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetProductRelationshipsRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\ProductIdentifierType
     */
    private $productIdentifier;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\ProductIdentifierType  $productIdentifier
     */
    public function __construct(ProductIdentifierType $productIdentifier)
    {
        $this->productIdentifier = $productIdentifier;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductIdentifierType  $productIdentifier
     */
    public static function create(ProductIdentifierType $productIdentifier)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\ProductIdentifierType
     */
    public function getProductIdentifier(): ProductIdentifierType
    {
        return $this->productIdentifier;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductIdentifierType  $productIdentifier
     */
    public function withProductIdentifier(ProductIdentifierType $productIdentifier): GetProductRelationshipsRequestType
    {
        $new = clone $this;
        $new->productIdentifier = $productIdentifier;

        return $new;
    }
}

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
     */
    public function __construct(ProductIdentifierType $productIdentifier)
    {
        $this->productIdentifier = $productIdentifier;
    }

    public static function create(ProductIdentifierType $productIdentifier)
    {
        return new static(...\func_get_args());
    }

    public function getProductIdentifier(): ProductIdentifierType
    {
        return $this->productIdentifier;
    }

    public function withProductIdentifier(ProductIdentifierType $productIdentifier): GetProductRelationshipsRequestType
    {
        $new = clone $this;
        $new->productIdentifier = $productIdentifier;

        return $new;
    }
}

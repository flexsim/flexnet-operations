<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateProductRelationshipRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\ProductRelationshipDataType|array<\Flexnet\ProductPackagingService\Type\ProductRelationshipDataType>
     */
    private $relationship;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\ProductRelationshipDataType|array<\Flexnet\ProductPackagingService\Type\ProductRelationshipDataType>  $relationship
     */
    public function __construct(ProductRelationshipDataType|array $relationship)
    {
        $this->relationship = $relationship;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductRelationshipDataType|array<\Flexnet\ProductPackagingService\Type\ProductRelationshipDataType>  $relationship
     */
    public static function create(ProductRelationshipDataType|array $relationship)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\ProductRelationshipDataType|array<\Flexnet\ProductPackagingService\Type\ProductRelationshipDataType>
     */
    public function getRelationship(): ProductRelationshipDataType|array
    {
        return $this->relationship;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductRelationshipDataType|array<\Flexnet\ProductPackagingService\Type\ProductRelationshipDataType>  $relationship
     */
    public function withRelationship(ProductRelationshipDataType|array $relationship): CreateProductRelationshipRequestType
    {
        $new = clone $this;
        $new->relationship = $relationship;

        return $new;
    }
}

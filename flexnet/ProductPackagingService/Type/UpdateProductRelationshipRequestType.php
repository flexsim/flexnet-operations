<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateProductRelationshipRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\UpdateProductRelationshipDataType|array<\Flexnet\ProductPackagingService\Type\UpdateProductRelationshipDataType>
     */
    private $relationship;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\UpdateProductRelationshipDataType|array<\Flexnet\ProductPackagingService\Type\UpdateProductRelationshipDataType>  $relationship
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\UpdateProductRelationshipDataType|array $relationship)
    {
        $this->relationship = $relationship;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UpdateProductRelationshipDataType|array<\Flexnet\ProductPackagingService\Type\UpdateProductRelationshipDataType>  $relationship
     */
    public static function create(\Flexnet\ProductPackagingService\Type\UpdateProductRelationshipDataType|array $relationship)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\UpdateProductRelationshipDataType|array<\Flexnet\ProductPackagingService\Type\UpdateProductRelationshipDataType>
     */
    public function getRelationship(): \Flexnet\ProductPackagingService\Type\UpdateProductRelationshipDataType|array
    {
        return $this->relationship;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UpdateProductRelationshipDataType|array<\Flexnet\ProductPackagingService\Type\UpdateProductRelationshipDataType>  $relationship
     */
    public function withRelationship(\Flexnet\ProductPackagingService\Type\UpdateProductRelationshipDataType|array $relationship): \Flexnet\ProductPackagingService\Type\UpdateProductRelationshipRequestType
    {
        $new = clone $this;
        $new->relationship = $relationship;

        return $new;
    }
}

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
    public function __construct(UpdateProductRelationshipDataType|array $relationship)
    {
        $this->relationship = $relationship;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UpdateProductRelationshipDataType|array<\Flexnet\ProductPackagingService\Type\UpdateProductRelationshipDataType>  $relationship
     */
    public static function create(UpdateProductRelationshipDataType|array $relationship)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\UpdateProductRelationshipDataType|array<\Flexnet\ProductPackagingService\Type\UpdateProductRelationshipDataType>
     */
    public function getRelationship(): UpdateProductRelationshipDataType|array
    {
        return $this->relationship;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UpdateProductRelationshipDataType|array<\Flexnet\ProductPackagingService\Type\UpdateProductRelationshipDataType>  $relationship
     */
    public function withRelationship(UpdateProductRelationshipDataType|array $relationship): UpdateProductRelationshipRequestType
    {
        $new = clone $this;
        $new->relationship = $relationship;

        return $new;
    }
}

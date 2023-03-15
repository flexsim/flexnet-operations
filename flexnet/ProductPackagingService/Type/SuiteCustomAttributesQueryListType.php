<?php

namespace Flexnet\ProductPackagingService\Type;

class SuiteCustomAttributesQueryListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\SuiteCustomAttributeQueryType|array<\Flexnet\ProductPackagingService\Type\SuiteCustomAttributeQueryType>|null
     */
    private $attribute;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\SuiteCustomAttributeQueryType|array<\Flexnet\ProductPackagingService\Type\SuiteCustomAttributeQueryType>|null  $attribute
     */
    public function __construct(SuiteCustomAttributeQueryType|array|null $attribute = null)
    {
        $this->attribute = $attribute;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\SuiteCustomAttributeQueryType|array<\Flexnet\ProductPackagingService\Type\SuiteCustomAttributeQueryType>|null  $attribute
     */
    public static function create(SuiteCustomAttributeQueryType|array|null $attribute = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\SuiteCustomAttributeQueryType|array<\Flexnet\ProductPackagingService\Type\SuiteCustomAttributeQueryType>|null
     */
    public function getAttribute(): SuiteCustomAttributeQueryType|array|null
    {
        return $this->attribute;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\SuiteCustomAttributeQueryType|array<\Flexnet\ProductPackagingService\Type\SuiteCustomAttributeQueryType>|null  $attribute
     */
    public function withAttribute(SuiteCustomAttributeQueryType|array|null $attribute): SuiteCustomAttributesQueryListType
    {
        $new = clone $this;
        $new->attribute = $attribute;

        return $new;
    }
}

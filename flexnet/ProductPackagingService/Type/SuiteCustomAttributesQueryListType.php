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
    public function __construct(\Flexnet\ProductPackagingService\Type\SuiteCustomAttributeQueryType|array|null $attribute = null)
    {
        $this->attribute = $attribute;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\SuiteCustomAttributeQueryType|array<\Flexnet\ProductPackagingService\Type\SuiteCustomAttributeQueryType>|null  $attribute
     */
    public static function create(\Flexnet\ProductPackagingService\Type\SuiteCustomAttributeQueryType|array|null $attribute = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\SuiteCustomAttributeQueryType|array<\Flexnet\ProductPackagingService\Type\SuiteCustomAttributeQueryType>|null
     */
    public function getAttribute(): \Flexnet\ProductPackagingService\Type\SuiteCustomAttributeQueryType|array|null
    {
        return $this->attribute;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\SuiteCustomAttributeQueryType|array<\Flexnet\ProductPackagingService\Type\SuiteCustomAttributeQueryType>|null  $attribute
     */
    public function withAttribute(\Flexnet\ProductPackagingService\Type\SuiteCustomAttributeQueryType|array|null $attribute): \Flexnet\ProductPackagingService\Type\SuiteCustomAttributesQueryListType
    {
        $new = clone $this;
        $new->attribute = $attribute;

        return $new;
    }
}

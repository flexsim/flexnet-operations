<?php

namespace Flexnet\LicenseService\Type;

class CustomAttributesQueryListType
{
    /**
     * @var \Flexnet\LicenseService\Type\CustomAttributeQueryType|array<\Flexnet\LicenseService\Type\CustomAttributeQueryType>|null
     */
    private $attribute;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\CustomAttributeQueryType|array<\Flexnet\LicenseService\Type\CustomAttributeQueryType>|null  $attribute
     */
    public function __construct(\Flexnet\LicenseService\Type\CustomAttributeQueryType|array|null $attribute = null)
    {
        $this->attribute = $attribute;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CustomAttributeQueryType|array<\Flexnet\LicenseService\Type\CustomAttributeQueryType>|null  $attribute
     */
    public static function create(\Flexnet\LicenseService\Type\CustomAttributeQueryType|array|null $attribute = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\CustomAttributeQueryType|array<\Flexnet\LicenseService\Type\CustomAttributeQueryType>|null
     */
    public function getAttribute(): \Flexnet\LicenseService\Type\CustomAttributeQueryType|array|null
    {
        return $this->attribute;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CustomAttributeQueryType|array<\Flexnet\LicenseService\Type\CustomAttributeQueryType>|null  $attribute
     */
    public function withAttribute(\Flexnet\LicenseService\Type\CustomAttributeQueryType|array|null $attribute): \Flexnet\LicenseService\Type\CustomAttributesQueryListType
    {
        $new = clone $this;
        $new->attribute = $attribute;

        return $new;
    }
}

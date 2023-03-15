<?php

namespace Flexnet\LicenseService\Type;

class PublisherAttributesListDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\SimpleAttributeDataType|array<\Flexnet\LicenseService\Type\SimpleAttributeDataType>
     */
    private $attribute;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\SimpleAttributeDataType|array<\Flexnet\LicenseService\Type\SimpleAttributeDataType>  $attribute
     */
    public function __construct(SimpleAttributeDataType|array $attribute)
    {
        $this->attribute = $attribute;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\SimpleAttributeDataType|array<\Flexnet\LicenseService\Type\SimpleAttributeDataType>  $attribute
     */
    public static function create(SimpleAttributeDataType|array $attribute)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\SimpleAttributeDataType|array<\Flexnet\LicenseService\Type\SimpleAttributeDataType>
     */
    public function getAttribute(): SimpleAttributeDataType|array
    {
        return $this->attribute;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\SimpleAttributeDataType|array<\Flexnet\LicenseService\Type\SimpleAttributeDataType>  $attribute
     */
    public function withAttribute(SimpleAttributeDataType|array $attribute): PublisherAttributesListDataType
    {
        $new = clone $this;
        $new->attribute = $attribute;

        return $new;
    }
}

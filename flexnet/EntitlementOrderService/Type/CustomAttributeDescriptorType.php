<?php

namespace Flexnet\EntitlementOrderService\Type;

class CustomAttributeDescriptorType
{
    /**
     * @var string
     */
    private $attributeName;

    /**
     * Constructor
     *
     * @param  string  $attributeName
     */
    public function __construct(string $attributeName)
    {
        $this->attributeName = $attributeName;
    }

    /**
     * @param  string  $attributeName
     */
    public static function create(string $attributeName)
    {
        return new static(...\func_get_args());
    }

    public function getAttributeName(): string
    {
        return $this->attributeName;
    }

    public function withAttributeName(string $attributeName): CustomAttributeDescriptorType
    {
        $new = clone $this;
        $new->attributeName = $attributeName;

        return $new;
    }
}

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
     */
    public function __construct(string $attributeName)
    {
        $this->attributeName = $attributeName;
    }

    public static function create(string $attributeName)
    {
        return new static(...\func_get_args());
    }

    public function getAttributeName(): string
    {
        return $this->attributeName;
    }

    public function withAttributeName(string $attributeName): \Flexnet\EntitlementOrderService\Type\CustomAttributeDescriptorType
    {
        $new = clone $this;
        $new->attributeName = $attributeName;

        return $new;
    }
}

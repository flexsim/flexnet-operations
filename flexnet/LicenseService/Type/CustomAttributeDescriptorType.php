<?php

namespace Flexnet\LicenseService\Type;

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

    /**
     * @return string
     */
    public function getAttributeName(): string
    {
        return $this->attributeName;
    }

    /**
     * @param  string  $attributeName
     * @return CustomAttributeDescriptorType
     */
    public function withAttributeName(string $attributeName): CustomAttributeDescriptorType
    {
        $new = clone $this;
        $new->attributeName = $attributeName;

        return $new;
    }
}
<?php

namespace Flexnet\LicenseService\Type;

class GetHostAttributesDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType|null
     */
    private $hostAttributes;

    /**
     * Constructor
     */
    public function __construct(AttributeMetaDescriptorDataType $hostAttributes = null)
    {
        $this->hostAttributes = $hostAttributes;
    }

    public static function create(AttributeMetaDescriptorDataType $hostAttributes = null)
    {
        return new static(...\func_get_args());
    }

    public function getHostAttributes(): ?AttributeMetaDescriptorDataType
    {
        return $this->hostAttributes;
    }

    public function withHostAttributes(?AttributeMetaDescriptorDataType $hostAttributes): GetHostAttributesDataType
    {
        $new = clone $this;
        $new->hostAttributes = $hostAttributes;

        return $new;
    }
}

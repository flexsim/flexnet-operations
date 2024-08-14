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
    public function __construct(?\Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType $hostAttributes = null)
    {
        $this->hostAttributes = $hostAttributes;
    }

    public static function create(?\Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType $hostAttributes = null)
    {
        return new static(...\func_get_args());
    }

    public function getHostAttributes(): ?\Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType
    {
        return $this->hostAttributes;
    }

    public function withHostAttributes(?\Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType $hostAttributes): \Flexnet\LicenseService\Type\GetHostAttributesDataType
    {
        $new = clone $this;
        $new->hostAttributes = $hostAttributes;

        return $new;
    }
}

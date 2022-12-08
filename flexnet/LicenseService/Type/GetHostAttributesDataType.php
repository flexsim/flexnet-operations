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
     *
     * @param \Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType|null $hostAttributes
     */
    public function __construct(\Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType|null $hostAttributes = null)
    {
        $this->hostAttributes = $hostAttributes;
    }

    /**
     * @param \Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType|null $hostAttributes
     */
    public static function create(\Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType|null $hostAttributes = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType|null
     */
    public function getHostAttributes() : \Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType|null
    {
        return $this->hostAttributes;
    }

    /**
     * @param \Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType|null $hostAttributes
     * @return GetHostAttributesDataType
     */
    public function withHostAttributes(\Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType|null $hostAttributes) : \Flexnet\LicenseService\Type\GetHostAttributesDataType
    {
        $new = clone $this;
        $new->hostAttributes = $hostAttributes;

        return $new;
    }
}


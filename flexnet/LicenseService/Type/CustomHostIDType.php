<?php

namespace Flexnet\LicenseService\Type;

class CustomHostIDType
{
    /**
     * @var string|null
     */
    private $hostId;

    /**
     * @var \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null
     */
    private $hostAttributes;

    /**
     * @var \Flexnet\LicenseService\Type\HostTypePKType|null
     */
    private $hostType;

    /**
     * Constructor
     */
    public function __construct(?string $hostId = null, ?\Flexnet\LicenseService\Type\AttributeDescriptorDataType $hostAttributes = null, ?\Flexnet\LicenseService\Type\HostTypePKType $hostType = null)
    {
        $this->hostId = $hostId;
        $this->hostAttributes = $hostAttributes;
        $this->hostType = $hostType;
    }

    public static function create(?string $hostId = null, ?\Flexnet\LicenseService\Type\AttributeDescriptorDataType $hostAttributes = null, ?\Flexnet\LicenseService\Type\HostTypePKType $hostType = null)
    {
        return new static(...\func_get_args());
    }

    public function getHostId(): ?string
    {
        return $this->hostId;
    }

    public function withHostId(?string $hostId): \Flexnet\LicenseService\Type\CustomHostIDType
    {
        $new = clone $this;
        $new->hostId = $hostId;

        return $new;
    }

    public function getHostAttributes(): ?\Flexnet\LicenseService\Type\AttributeDescriptorDataType
    {
        return $this->hostAttributes;
    }

    public function withHostAttributes(?\Flexnet\LicenseService\Type\AttributeDescriptorDataType $hostAttributes): \Flexnet\LicenseService\Type\CustomHostIDType
    {
        $new = clone $this;
        $new->hostAttributes = $hostAttributes;

        return $new;
    }

    public function getHostType(): ?\Flexnet\LicenseService\Type\HostTypePKType
    {
        return $this->hostType;
    }

    public function withHostType(?\Flexnet\LicenseService\Type\HostTypePKType $hostType): \Flexnet\LicenseService\Type\CustomHostIDType
    {
        $new = clone $this;
        $new->hostType = $hostType;

        return $new;
    }
}

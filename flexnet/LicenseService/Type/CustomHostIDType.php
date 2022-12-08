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
     *
     * @param  string|null  $hostId
     * @param  \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null  $hostAttributes
     * @param  \Flexnet\LicenseService\Type\HostTypePKType|null  $hostType
     */
    public function __construct(string|null $hostId = null, AttributeDescriptorDataType|null $hostAttributes = null, HostTypePKType|null $hostType = null)
    {
        $this->hostId = $hostId;
        $this->hostAttributes = $hostAttributes;
        $this->hostType = $hostType;
    }

    /**
     * @param  string|null  $hostId
     * @param  \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null  $hostAttributes
     * @param  \Flexnet\LicenseService\Type\HostTypePKType|null  $hostType
     */
    public static function create(string|null $hostId = null, AttributeDescriptorDataType|null $hostAttributes = null, HostTypePKType|null $hostType = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string|null
     */
    public function getHostId(): string|null
    {
        return $this->hostId;
    }

    /**
     * @param  string|null  $hostId
     * @return CustomHostIDType
     */
    public function withHostId(string|null $hostId): CustomHostIDType
    {
        $new = clone $this;
        $new->hostId = $hostId;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null
     */
    public function getHostAttributes(): AttributeDescriptorDataType|null
    {
        return $this->hostAttributes;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null  $hostAttributes
     * @return CustomHostIDType
     */
    public function withHostAttributes(AttributeDescriptorDataType|null $hostAttributes): CustomHostIDType
    {
        $new = clone $this;
        $new->hostAttributes = $hostAttributes;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\HostTypePKType|null
     */
    public function getHostType(): HostTypePKType|null
    {
        return $this->hostType;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\HostTypePKType|null  $hostType
     * @return CustomHostIDType
     */
    public function withHostType(HostTypePKType|null $hostType): CustomHostIDType
    {
        $new = clone $this;
        $new->hostType = $hostType;

        return $new;
    }
}

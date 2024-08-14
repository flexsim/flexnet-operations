<?php

namespace Flexnet\ProductPackagingService\Type;

class FeatureOverrideParamsType
{
    /**
     * @var string|null
     */
    private $vendorString;

    /**
     * @var string|null
     */
    private $notice;

    /**
     * @var string|null
     */
    private $serialNumber;

    /**
     * @var \Flexnet\ProductPackagingService\Type\DupGroupDataType|null
     */
    private $dupGroup;

    /**
     * Constructor
     */
    public function __construct(?string $vendorString = null, ?string $notice = null, ?string $serialNumber = null, ?\Flexnet\ProductPackagingService\Type\DupGroupDataType $dupGroup = null)
    {
        $this->vendorString = $vendorString;
        $this->notice = $notice;
        $this->serialNumber = $serialNumber;
        $this->dupGroup = $dupGroup;
    }

    public static function create(?string $vendorString = null, ?string $notice = null, ?string $serialNumber = null, ?\Flexnet\ProductPackagingService\Type\DupGroupDataType $dupGroup = null)
    {
        return new static(...\func_get_args());
    }

    public function getVendorString(): ?string
    {
        return $this->vendorString;
    }

    public function withVendorString(?string $vendorString): \Flexnet\ProductPackagingService\Type\FeatureOverrideParamsType
    {
        $new = clone $this;
        $new->vendorString = $vendorString;

        return $new;
    }

    public function getNotice(): ?string
    {
        return $this->notice;
    }

    public function withNotice(?string $notice): \Flexnet\ProductPackagingService\Type\FeatureOverrideParamsType
    {
        $new = clone $this;
        $new->notice = $notice;

        return $new;
    }

    public function getSerialNumber(): ?string
    {
        return $this->serialNumber;
    }

    public function withSerialNumber(?string $serialNumber): \Flexnet\ProductPackagingService\Type\FeatureOverrideParamsType
    {
        $new = clone $this;
        $new->serialNumber = $serialNumber;

        return $new;
    }

    public function getDupGroup(): ?\Flexnet\ProductPackagingService\Type\DupGroupDataType
    {
        return $this->dupGroup;
    }

    public function withDupGroup(?\Flexnet\ProductPackagingService\Type\DupGroupDataType $dupGroup): \Flexnet\ProductPackagingService\Type\FeatureOverrideParamsType
    {
        $new = clone $this;
        $new->dupGroup = $dupGroup;

        return $new;
    }
}

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
     *
     * @param  string|null  $vendorString
     * @param  string|null  $notice
     * @param  string|null  $serialNumber
     * @param  \Flexnet\ProductPackagingService\Type\DupGroupDataType|null  $dupGroup
     */
    public function __construct(string|null $vendorString = null, string|null $notice = null, string|null $serialNumber = null, DupGroupDataType|null $dupGroup = null)
    {
        $this->vendorString = $vendorString;
        $this->notice = $notice;
        $this->serialNumber = $serialNumber;
        $this->dupGroup = $dupGroup;
    }

    /**
     * @param  string|null  $vendorString
     * @param  string|null  $notice
     * @param  string|null  $serialNumber
     * @param  \Flexnet\ProductPackagingService\Type\DupGroupDataType|null  $dupGroup
     */
    public static function create(string|null $vendorString = null, string|null $notice = null, string|null $serialNumber = null, DupGroupDataType|null $dupGroup = null)
    {
        return new static(...\func_get_args());
    }

    public function getVendorString(): string|null
    {
        return $this->vendorString;
    }

    public function withVendorString(string|null $vendorString): FeatureOverrideParamsType
    {
        $new = clone $this;
        $new->vendorString = $vendorString;

        return $new;
    }

    public function getNotice(): string|null
    {
        return $this->notice;
    }

    public function withNotice(string|null $notice): FeatureOverrideParamsType
    {
        $new = clone $this;
        $new->notice = $notice;

        return $new;
    }

    public function getSerialNumber(): string|null
    {
        return $this->serialNumber;
    }

    public function withSerialNumber(string|null $serialNumber): FeatureOverrideParamsType
    {
        $new = clone $this;
        $new->serialNumber = $serialNumber;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\DupGroupDataType|null
     */
    public function getDupGroup(): DupGroupDataType|null
    {
        return $this->dupGroup;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\DupGroupDataType|null  $dupGroup
     */
    public function withDupGroup(DupGroupDataType|null $dupGroup): FeatureOverrideParamsType
    {
        $new = clone $this;
        $new->dupGroup = $dupGroup;

        return $new;
    }
}

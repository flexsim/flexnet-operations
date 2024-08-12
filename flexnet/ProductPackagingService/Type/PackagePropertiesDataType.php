<?php

namespace Flexnet\ProductPackagingService\Type;

class PackagePropertiesDataType
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string|null
     */
    private $version;

    /**
     * @var \Flexnet\ProductPackagingService\Type\VersionFormatType
     */
    private $versionFormat;

    /**
     * Constructor
     */
    public function __construct(string $name, \Flexnet\ProductPackagingService\Type\VersionFormatType $versionFormat, ?string $version = null)
    {
        $this->name = $name;
        $this->versionFormat = $versionFormat;
        $this->version = $version;
    }

    public static function create(string $name, \Flexnet\ProductPackagingService\Type\VersionFormatType $versionFormat, ?string $version = null)
    {
        return new static(...\func_get_args());
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function withName(string $name): \Flexnet\ProductPackagingService\Type\PackagePropertiesDataType
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function withVersion(?string $version): \Flexnet\ProductPackagingService\Type\PackagePropertiesDataType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }

    public function getVersionFormat(): \Flexnet\ProductPackagingService\Type\VersionFormatType
    {
        return $this->versionFormat;
    }

    public function withVersionFormat(\Flexnet\ProductPackagingService\Type\VersionFormatType $versionFormat): \Flexnet\ProductPackagingService\Type\PackagePropertiesDataType
    {
        $new = clone $this;
        $new->versionFormat = $versionFormat;

        return $new;
    }
}

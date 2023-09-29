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
     * @var string
     */
    private $versionFormat;

    /**
     * Constructor
     */
    public function __construct(string $name, string $versionFormat, string $version = null)
    {
        $this->name = $name;
        $this->versionFormat = $versionFormat;
        $this->version = $version;
    }

    public static function create(string $name, string $versionFormat, string $version = null)
    {
        return new static(...\func_get_args());
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function withName(string $name): PackagePropertiesDataType
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function withVersion(?string $version): PackagePropertiesDataType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }

    public function getVersionFormat(): string
    {
        return $this->versionFormat;
    }

    public function withVersionFormat(string $versionFormat): PackagePropertiesDataType
    {
        $new = clone $this;
        $new->versionFormat = $versionFormat;

        return $new;
    }
}

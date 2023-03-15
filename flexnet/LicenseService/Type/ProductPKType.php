<?php

namespace Flexnet\LicenseService\Type;

class ProductPKType
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $version;

    /**
     * Constructor
     */
    public function __construct(string $name, string $version)
    {
        $this->name = $name;
        $this->version = $version;
    }

    public static function create(string $name, string $version)
    {
        return new static(...\func_get_args());
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function withName(string $name): ProductPKType
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function withVersion(string $version): ProductPKType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }
}

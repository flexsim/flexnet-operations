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
     *
     * @param  string  $name
     * @param  string  $version
     */
    public function __construct(string $name, string $version)
    {
        $this->name = $name;
        $this->version = $version;
    }

    /**
     * @param  string  $name
     * @param  string  $version
     */
    public static function create(string $name, string $version)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param  string  $name
     * @return ProductPKType
     */
    public function withName(string $name): ProductPKType
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @param  string  $version
     * @return ProductPKType
     */
    public function withVersion(string $version): ProductPKType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }
}

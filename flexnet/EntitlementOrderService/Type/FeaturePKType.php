<?php

namespace Flexnet\EntitlementOrderService\Type;

class FeaturePKType
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
     * Constructor
     *
     * @param  string  $name
     * @param  string|null  $version
     */
    public function __construct(string $name, string|null $version = null)
    {
        $this->name = $name;
        $this->version = $version;
    }

    /**
     * @param  string  $name
     * @param  string|null  $version
     */
    public static function create(string $name, string|null $version = null)
    {
        return new static(...\func_get_args());
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function withName(string $name): FeaturePKType
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    public function getVersion(): string|null
    {
        return $this->version;
    }

    public function withVersion(string|null $version): FeaturePKType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }
}

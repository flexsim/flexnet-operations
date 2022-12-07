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

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param  string  $name
     * @return FeaturePKType
     */
    public function withName(string $name): FeaturePKType
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getVersion(): string|null
    {
        return $this->version;
    }

    /**
     * @param  string|null  $version
     * @return FeaturePKType
     */
    public function withVersion(string|null $version): FeaturePKType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }
}

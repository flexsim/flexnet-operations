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
     */
    public function __construct(string $name, ?string $version = null)
    {
        $this->name = $name;
        $this->version = $version;
    }

    public static function create(string $name, ?string $version = null)
    {
        return new static(...\func_get_args());
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function withName(string $name): \Flexnet\EntitlementOrderService\Type\FeaturePKType
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function withVersion(?string $version): \Flexnet\EntitlementOrderService\Type\FeaturePKType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }
}

<?php

namespace Flexnet\EntitlementOrderService\Type;

class FeatureBundlePKType
{
    /**
     * @var string
     */
    private $name;

    /**
     * Constructor
     *
     * @param  string  $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param  string  $name
     */
    public static function create(string $name)
    {
        return new static(...\func_get_args());
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function withName(string $name): FeatureBundlePKType
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }
}
